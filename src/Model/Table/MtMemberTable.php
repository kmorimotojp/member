<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtMember Model
 *
 * @method \App\Model\Entity\MtMember get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtMember newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtMember[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtMember|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtMember patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtMember[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtMember findOrCreate($search, callable $callback = null, $options = [])
 */
class MtMemberTable extends Table
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

        $this->setTable('mt_member');
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
            ->integer('ID')
            ->requirePresence('ID', 'create')
            ->notEmpty('ID');

        $validator
            ->scalar('FIRST_NAME')
            ->maxLength('FIRST_NAME', 255)
            ->requirePresence('FIRST_NAME', 'create')
            ->notEmpty('FIRST_NAME');

        $validator
            ->scalar('LAST_NAME')
            ->maxLength('LAST_NAME', 255)
            ->requirePresence('LAST_NAME', 'create')
            ->notEmpty('LAST_NAME');

        $validator
            ->integer('CLASS')
            ->requirePresence('CLASS', 'create')
            ->notEmpty('CLASS');

        return $validator;
    }
}
