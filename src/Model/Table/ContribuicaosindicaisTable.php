<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contribuicaosindicais Model
 *
 * @property \App\Model\Table\FuncionariosTable&\Cake\ORM\Association\BelongsTo $Funcionarios
 *
 * @method \App\Model\Entity\Contribuicaosindicai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contribuicaosindicai findOrCreate($search, callable $callback = null, $options = [])
 */
class ContribuicaosindicaisTable extends Table
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

        $this->setTable('contribuicaosindicais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Funcionarios', [
            'foreignKey' => 'funcionarios_id',
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
            ->scalar('ano')
            ->allowEmptyString('ano');

        $validator
            ->numeric('valor')
            ->allowEmptyString('valor');

        $validator
            ->scalar('sindicato')
            ->maxLength('sindicato', 45)
            ->allowEmptyString('sindicato');

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
        $rules->add($rules->existsIn(['funcionarios_id'], 'Funcionarios'));

        return $rules;
    }
}
