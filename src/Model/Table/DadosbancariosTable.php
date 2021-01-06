<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dadosbancarios Model
 *
 * @property \App\Model\Table\FuncionariosTable&\Cake\ORM\Association\BelongsTo $Funcionarios
 *
 * @method \App\Model\Entity\Dadosbancario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dadosbancario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dadosbancario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dadosbancario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dadosbancario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dadosbancario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dadosbancario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dadosbancario findOrCreate($search, callable $callback = null, $options = [])
 */
class DadosbancariosTable extends Table
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

        $this->setTable('dadosbancarios');
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
            ->scalar('banco')
            ->maxLength('banco', 20)
            ->allowEmptyString('banco');

        $validator
            ->scalar('tipo_conta')
            ->maxLength('tipo_conta', 15)
            ->allowEmptyString('tipo_conta');

        $validator
            ->scalar('agencia')
            ->maxLength('agencia', 8)
            ->allowEmptyString('agencia');

        $validator
            ->scalar('conta')
            ->maxLength('conta', 15)
            ->allowEmptyString('conta');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 1)
            ->allowEmptyString('ativo');

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
