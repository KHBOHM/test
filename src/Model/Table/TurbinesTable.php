<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turbines Model
 *
 * @method \App\Model\Entity\Turbine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Turbine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Turbine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Turbine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Turbine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Turbine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Turbine findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TurbinesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('turbines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('code')
            ->maxLength('code', 100)
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->integer('power')
            ->requirePresence('power', 'create')
            ->notEmpty('power');

        $validator
            ->scalar('notes')
            ->allowEmpty('notes');

        return $validator;
    }
}
