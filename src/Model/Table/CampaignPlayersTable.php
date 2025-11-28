<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * @method \App\Model\Entity\CampaignPlayer newEmptyEntity()
 * @method \App\Model\Entity\CampaignPlayer newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CampaignPlayer> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CampaignPlayer get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CampaignPlayer findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CampaignPlayer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CampaignPlayer> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CampaignPlayer|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CampaignPlayer saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CampaignPlayer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CampaignPlayer>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CampaignPlayer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CampaignPlayer> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CampaignPlayer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CampaignPlayer>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CampaignPlayer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CampaignPlayer> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampaignPlayersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('campaign_players');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Campaigns', [
            'foreignKey' => 'campaign_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('campaign_id')
            ->requirePresence('campaign_id', 'create')
            ->notEmptyString('campaign_id');

        $validator
            ->integer('user_id')
            ->requirePresence('user_id', 'create')
            ->notEmptyString('user_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['campaign_id'], 'Campaigns'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

