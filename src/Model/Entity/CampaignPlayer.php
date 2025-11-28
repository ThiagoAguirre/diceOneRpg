<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * @property int $id
 * @property int $campaign_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \App\Model\Entity\Campaign $campaign
 * @property \App\Model\Entity\User $user
 */
class CampaignPlayer extends Entity
{
    protected array $_accessible = [
        'campaign_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'campaign' => true,
        'user' => true,
    ];
}

