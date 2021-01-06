<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atestados Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Atestado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atestado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atestado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atestado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atestado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atestado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atestado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atestado findOrCreate($search, callable $callback = null, $options = [])
 */
class AtestadosTable extends Table
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

        $this->setTable('atestados');
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
            ->date('dt_atestado')
            ->allowEmptyDate('dt_atestado');

        $validator
            ->scalar('justificativa')
            ->maxLength('justificativa', 45)
            ->allowEmptyString('justificativa');

        $validator
            ->scalar('medico')
            ->maxLength('medico', 45)
            ->allowEmptyString('medico');

        $validator
            ->scalar('cid')
            ->maxLength('cid', 8)
            ->allowEmptyString('cid');

        $validator
            ->integer('afastamento')
            ->allowEmptyString('afastamento');

        $validator
            ->scalar('img')
            ->maxLength('img', 150)
            ->allowEmptyString('img');

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
