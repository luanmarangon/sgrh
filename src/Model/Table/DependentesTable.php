<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependentes Model
 *
 * @property \App\Model\Table\FuncionariosTable&\Cake\ORM\Association\BelongsTo $Funcionarios
 *
 * @method \App\Model\Entity\Dependente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dependente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependente findOrCreate($search, callable $callback = null, $options = [])
 */
class DependentesTable extends Table
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

        $this->setTable('dependentes');
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
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->allowEmptyString('nome');

        $validator
            ->scalar('mae')
            ->maxLength('mae', 45)
            ->allowEmptyString('mae');

        $validator
            ->scalar('parentesco')
            ->maxLength('parentesco', 15)
            ->allowEmptyString('parentesco');

        $validator
            ->date('nascimento')
            ->allowEmptyDate('nascimento');

        $validator
            ->scalar('naturalidade')
            ->maxLength('naturalidade', 45)
            ->allowEmptyString('naturalidade');

        $validator
            ->scalar('uf_naturalidade')
            ->maxLength('uf_naturalidade', 2)
            ->allowEmptyString('uf_naturalidade');

        $validator
            ->scalar('nacionalidade')
            ->maxLength('nacionalidade', 15)
            ->allowEmptyString('nacionalidade');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 14)
            ->allowEmptyString('cpf');

        $validator
            ->scalar('nascido_vivo')
            ->maxLength('nascido_vivo', 45)
            ->allowEmptyString('nascido_vivo');

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
