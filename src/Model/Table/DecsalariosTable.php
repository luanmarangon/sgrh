<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Decsalarios Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Decsalario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Decsalario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Decsalario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Decsalario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Decsalario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Decsalario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Decsalario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Decsalario findOrCreate($search, callable $callback = null, $options = [])
 */
class DecsalariosTable extends Table
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

        $this->setTable('decsalarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contratos', [
            'foreignKey' => 'contratos_id',
            'joinType' => 'INNER',
        ]);
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->date('primeira_parc')
            ->allowEmptyDate('primeira_parc');

        $validator
            ->numeric('valor_primeira')
            ->allowEmptyString('valor_primeira');

        $validator
            ->date('segunda_parc')
            ->allowEmptyDate('segunda_parc');

        $validator
            ->numeric('valor_segunda')
            ->allowEmptyString('valor_segunda');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['contratos_id'], 'Contratos'));

        return $rules;
    }
}
