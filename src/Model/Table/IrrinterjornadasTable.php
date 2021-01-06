<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Irrinterjornadas Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Irrinterjornada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Irrinterjornada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Irrinterjornada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Irrinterjornada|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Irrinterjornada saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Irrinterjornada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Irrinterjornada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Irrinterjornada findOrCreate($search, callable $callback = null, $options = [])
 */
class IrrinterjornadasTable extends Table
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

        $this->setTable('irrinterjornadas');
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
            ->time('fim_exp')
            ->allowEmptyTime('fim_exp');

        $validator
            ->time('inic_exp')
            ->allowEmptyTime('inic_exp');

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
