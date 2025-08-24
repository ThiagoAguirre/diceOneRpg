<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Guildhalls Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Guildhall newEmptyEntity()
 * @method \App\Model\Entity\Guildhall newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Guildhall> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Guildhall get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Guildhall findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Guildhall patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Guildhall> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Guildhall|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Guildhall saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Guildhall>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Guildhall>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Guildhall>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Guildhall> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Guildhall>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Guildhall>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Guildhall>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Guildhall> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GuildhallsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('guildhalls');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('user_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 120)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
