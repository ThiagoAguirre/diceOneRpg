<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Handles the experience for players discovering or joining campaigns.
 */
class PlayerController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Campaigns');
        $this->loadModel('CampaignPlayers');
    }

    /**
     * Lists public campaigns and exposes a simple locker for private sessions.
     */
    public function index()
    {
        if ($this->request->is('post') && $this->request->getData('form_context') === 'join-private') {
            $this->handlePrivateJoin();
        }

        $publicCampaigns = $this->Campaigns
            ->find()
            ->where(['is_private' => false])
            ->orderAsc('start_date')
            ->all();

        $countsQuery = $this->CampaignPlayers->find();
        $counts = $countsQuery
            ->select([
                'campaign_id',
                'player_count' => $countsQuery->func()->count('CampaignPlayers.id'),
            ])
            ->group('campaign_id')
            ->enableHydration(false)
            ->all()
            ->combine('campaign_id', 'player_count')
            ->toArray();

        $this->set([
            'publicCampaigns' => $publicCampaigns,
            'playerCounts' => $counts,
        ]);
    }

    private function handlePrivateJoin(): void
    {
        $code = trim((string)$this->request->getData('password'));
        if ($code === '') {
            $this->Flash->error(__('Please enter the access code to join a private campaign.'));

            return;
        }

        $campaign = $this->Campaigns
            ->find()
            ->where([
                'is_private' => true,
                'password' => $code,
            ])
            ->first();

        if ($campaign) {
            $this->Flash->success(
                __('Private campaign unlocked! Contact the master of "{0}" to finalize your seat.', $campaign->name)
            );
        } else {
            $this->Flash->error(__('No private campaign matches the provided code.'));
        }
    }
}
