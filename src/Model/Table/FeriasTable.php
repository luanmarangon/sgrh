<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ferias Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Feria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Feria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feria findOrCreate($search, callable $callback = null, $options = [])
 */
class FeriasTable extends Table
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

        $this->setTable('ferias');
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
            ->date('aq_inicio')
            ->allowEmptyDate('aq_inicio');

        $validator
            ->date('aq_fim')
            ->allowEmptyDate('aq_fim');

        $validator
            ->date('gozo_inicio')
            ->allowEmptyDate('gozo_inicio');

        $validator
            ->date('gozo_fim')
            ->allowEmptyDate('gozo_fim');

        $validator
            ->date('abono_inicio')
            ->allowEmptyDate('abono_inicio');

        $validator
            ->date('abono_fim')
            ->allowEmptyDate('abono_fim');

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
