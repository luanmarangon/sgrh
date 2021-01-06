<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Afastamentos Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Afastamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Afastamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Afastamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Afastamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Afastamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Afastamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Afastamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Afastamento findOrCreate($search, callable $callback = null, $options = [])
 */
class AfastamentosTable extends Table
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

        $this->setTable('afastamentos');
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
            ->date('dt_inicio')
            ->allowEmptyDate('dt_inicio');

        $validator
            ->date('dt_retorno')
            ->allowEmptyDate('dt_retorno');

        $validator
            ->scalar('crm')
            ->maxLength('crm', 10)
            ->allowEmptyString('crm');

        $validator
            ->scalar('cid')
            ->maxLength('cid', 8)
            ->allowEmptyString('cid');

        $validator
            ->scalar('motivo')
            ->maxLength('motivo', 100)
            ->allowEmptyString('motivo');

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
