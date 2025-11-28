<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $description
 * @property string $system
 * @property int $max_players
 * @property \Cake\I18n\Date|null $start_date
 * @property bool $is_private
 * @property string|null $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property array<\App\Model\Entity\CampaignPlayer> $campaign_players
 */
class Campaign extends Entity
{
    protected array $_accessible = [
        'name' => true,
        'image' => true,
        'description' => true,
        'system' => true,
        'max_players' => true,
        'start_date' => true,
        'is_private' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'campaign_players' => true,
    ];

    protected array $_hidden = [
        'password',
    ];
}

