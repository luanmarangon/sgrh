<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Laudoocorrencias Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Laudoocorrencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Laudoocorrencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Laudoocorrencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Laudoocorrencia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Laudoocorrencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Laudoocorrencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Laudoocorrencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Laudoocorrencia findOrCreate($search, callable $callback = null, $options = [])
 */
class LaudoocorrenciasTable extends Table
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

        $this->setTable('laudoocorrencias');
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
            ->date('dt_laudo')
            ->allowEmptyDate('dt_laudo');

        $validator
            ->time('hora')
            ->allowEmptyTime('hora');

        $validator
            ->scalar('ocorrencia')
            ->maxLength('ocorrencia', 45)
            ->allowEmptyString('ocorrencia');

        $validator
            ->scalar('tp_acao')
            ->maxLength('tp_acao', 45)
            ->allowEmptyString('tp_acao');

        $validator
            ->scalar('incidencia')
            ->maxLength('incidencia', 45)
            ->allowEmptyString('incidencia');

        $validator
            ->scalar('onde_ocorreu')
            ->maxLength('onde_ocorreu', 150)
            ->allowEmptyString('onde_ocorreu');

        $validator
            ->integer('quem_verificou')
            ->allowEmptyString('quem_verificou');

        $validator
            ->scalar('oque_ocorreu')
            ->maxLength('oque_ocorreu', 150)
            ->allowEmptyString('oque_ocorreu');

        $validator
            ->scalar('relator')
            ->maxLength('relator', 45)
            ->allowEmptyString('relator');

        $validator
            ->scalar('pq_ocorreu')
            ->maxLength('pq_ocorreu', 150)
            ->allowEmptyString('pq_ocorreu');

        $validator
            ->scalar('providencias')
            ->maxLength('providencias', 150)
            ->allowEmptyString('providencias');

        $validator
            ->integer('supervisor')
            ->allowEmptyString('supervisor');

        $validator
            ->scalar('possui_anexo')
            ->maxLength('possui_anexo', 1)
            ->allowEmptyString('possui_anexo');

        $validator
            ->scalar('anexo')
            ->maxLength('anexo', 45)
            ->allowEmptyString('anexo');

        $validator
            ->scalar('rh_parecer')
            ->maxLength('rh_parecer', 150)
            ->allowEmptyString('rh_parecer');

        $validator
            ->integer('rh_supervisor')
            ->allowEmptyString('rh_supervisor');

        $validator
            ->scalar('ger_parecer')
            ->maxLength('ger_parecer', 150)
            ->allowEmptyString('ger_parecer');

        $validator
            ->integer('gerente')
            ->allowEmptyString('gerente');

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
