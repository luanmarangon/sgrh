<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escalas Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Escala get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escala newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Escala[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escala|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escala saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escala patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escala[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escala findOrCreate($search, callable $callback = null, $options = [])
 */
class EscalasTable extends Table
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

        $this->setTable('escalas');
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
            ->time('inicio')
            ->allowEmptyTime('inicio');

        $validator
            ->time('saida')
            ->allowEmptyTime('saida');

        $validator
            ->time('retorno')
            ->allowEmptyTime('retorno');

        $validator
            ->time('fim')
            ->allowEmptyTime('fim');

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
