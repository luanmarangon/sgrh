<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Irrmarcacaopontos Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Irrmarcacaoponto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Irrmarcacaoponto findOrCreate($search, callable $callback = null, $options = [])
 */
class IrrmarcacaopontosTable extends Table
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

        $this->setTable('irrmarcacaopontos');
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
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('motivo')
            ->maxLength('motivo', 100)
            ->allowEmptyString('motivo');

        $validator
            ->scalar('justificativa')
            ->maxLength('justificativa', 200)
            ->allowEmptyString('justificativa');

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
