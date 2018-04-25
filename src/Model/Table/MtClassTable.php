<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtClass Model
 *
 * @method \App\Model\Entity\MtClas get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtClas newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtClas[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtClas|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtClas patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtClas[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtClas findOrCreate($search, callable $callback = null, $options = [])
 */
class MtClassTable extends Table
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

        $this->setTable('mt_class');
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
            ->integer('CODE')
            ->requirePresence('CODE', 'create')
            ->notEmpty('CODE');

        $validator
            ->scalar('NAME')
            ->maxLength('NAME', 255)
            ->requirePresence('NAME', 'create')
            ->notEmpty('NAME');

        $validator
            ->integer('DEL_FLG')
            ->requirePresence('DEL_FLG', 'create')
            ->notEmpty('DEL_FLG');

        return $validator;
    }
}
