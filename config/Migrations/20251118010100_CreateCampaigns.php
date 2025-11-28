<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCampaigns extends AbstractMigration
{
    public function change(): void
    {
        if ($this->hasTable('campaigns')) {
            return;
        }

        $table = $this->table('campaigns');
        $table
            ->addColumn('name', 'string', [
                'limit' => 120,
                'null' => false,
            ])
            ->addColumn('image', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
            ])
            ->addColumn('description', 'text', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('system', 'string', [
                'limit' => 80,
                'null' => false,
            ])
            ->addColumn('max_players', 'integer', [
                'null' => false,
                'default' => 4,
            ])
            ->addColumn('start_date', 'date', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('is_private', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
            ])
            ->addTimestamps('created', 'modified')
            ->create();
    }
}

