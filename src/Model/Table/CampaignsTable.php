<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * @method \App\Model\Entity\Campaign newEmptyEntity()
 * @method \App\Model\Entity\Campaign newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Campaign> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campaign get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Campaign findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Campaign patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Campaign> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campaign|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Campaign saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Campaign>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Campaign>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Campaign>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Campaign> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Campaign>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Campaign>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Campaign>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Campaign> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampaignsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('campaigns');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CampaignPlayers', [
            'foreignKey' => 'campaign_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 120)
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'Campaign name is required.');

        $validator
            ->scalar('system')
            ->maxLength('system', 80)
            ->requirePresence('system', 'create')
            ->notEmptyString('system', 'Please pick a system.');

        $validator
            ->nonNegativeInteger('max_players')
            ->greaterThanOrEqual('max_players', 1, 'At least one slot is required.')
            ->lessThanOrEqual('max_players', 100, 'The Guildhall supports up to 100 players per campaign.')
            ->requirePresence('max_players', 'create')
            ->notEmptyString('max_players');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->boolean('is_private')
            ->notEmptyString('is_private');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        return $rules;
    }
}

