<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCampaignPlayers extends AbstractMigration
{
    public function change(): void
    {
        if ($this->hasTable('campaign_players')) {
            return;
        }

        $table = $this->table('campaign_players');
        $table
            ->addColumn('campaign_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'null' => false,
            ])
            ->addTimestamps('created', 'modified')
            ->addForeignKey('campaign_id', 'campaigns', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->addForeignKey('user_id', 'users', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->addIndex(['campaign_id', 'user_id'], [
                'unique' => true,
                'name' => 'UNQ_CAMPAIGN_PLAYER',
            ])
            ->create();
    }
}

