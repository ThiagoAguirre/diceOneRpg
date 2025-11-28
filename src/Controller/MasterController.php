<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Utility\Text;

/**
 * Handles the experience for campaign masters when they arrive at /master.
 */
class MasterController extends AppController
{
    /**
     * @var \App\Model\Table\CampaignsTable
     */
    private $Campaigns;

    public function initialize(): void
    {
        parent::initialize();

        // Carregar o modelo manualmente como alternativa ao loadModel
        $this->Campaigns = $this->getTableLocator()->get('Campaigns');
    }

    /**
     * Allows a master to create a new campaign with minimal friction.
     */
    public function index()
    {
        $campaign = $this->Campaigns->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $uploadedImage = $this->request->getData('image');

            if ($uploadedImage && $uploadedImage->getError() === UPLOAD_ERR_OK) {
                $uploadPath = WWW_ROOT . 'img' . DS . 'campaigns';
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0775, true);
                }

                $extension = strtolower(pathinfo($uploadedImage->getClientFilename(), PATHINFO_EXTENSION));
                $filename = Text::uuid() . ($extension ? '.' . $extension : '');
                $uploadedImage->moveTo($uploadPath . DS . $filename);

                $data['image'] = 'img/campaigns/' . $filename;
            } else {
                unset($data['image']);
            }

            $campaign = $this->Campaigns->patchEntity($campaign, $data);

            if ($this->Campaigns->save($campaign)) {
                $this->Flash->success(__('Campaign created successfully.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Unable to create campaign. Please, review the form and try again.'));
        }

        $this->set(compact('campaign'));
    }
}
