<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medidadisciplinares Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\Medidadisciplinare get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medidadisciplinare newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medidadisciplinare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medidadisciplinare|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medidadisciplinare saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medidadisciplinare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medidadisciplinare[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medidadisciplinare findOrCreate($search, callable $callback = null, $options = [])
 */
class MedidadisciplinaresTable extends Table
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

        $this->setTable('medidadisciplinares');
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
            ->scalar('advertencia')
            ->maxLength('advertencia', 4294967295)
            ->allowEmptyString('advertencia');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 100)
            ->allowEmptyString('observacao');

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
