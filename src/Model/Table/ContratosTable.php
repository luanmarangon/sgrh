<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contratos Model
 *
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\FuncionariosTable&\Cake\ORM\Association\BelongsTo $Funcionarios
 * @property \App\Model\Table\JornadatrabalhosTable&\Cake\ORM\Association\BelongsTo $Jornadatrabalhos
 *
 * @method \App\Model\Entity\Contrato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contrato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contrato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato findOrCreate($search, callable $callback = null, $options = [])
 */
class ContratosTable extends Table
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

        $this->setTable('contratos');
        $this->setDisplayField('matricula');
        $this->setPrimaryKey('id');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresas_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Funcionarios', [
            'foreignKey' => 'funcionarios_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Jornadatrabalhos', [
            'foreignKey' => 'jornadatrabalhos_id',
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
            ->integer('matricula')
            ->allowEmptyString('matricula');

        $validator
            ->date('admissao')
            ->allowEmptyDate('admissao');

        $validator
            ->date('exadmissional')
            ->allowEmptyDate('exadmissional');

        $validator
            ->date('exp_inicio')
            ->allowEmptyDate('exp_inicio');

        $validator
            ->date('exp_fim')
            ->allowEmptyDate('exp_fim');

        $validator
            ->scalar('nomeuser')
            ->maxLength('nomeuser', 45)
            ->allowEmptyString('nomeuser');

        $validator
            ->integer('ramal')
            ->allowEmptyString('ramal');

        $validator
            ->scalar('mailprof')
            ->maxLength('mailprof', 60)
            ->allowEmptyString('mailprof');

        $validator
            ->scalar('optante')
            ->maxLength('optante', 1)
            ->allowEmptyString('optante');

        $validator
            ->date('dtopcao')
            ->allowEmptyDate('dtopcao');

        $validator
            ->date('dtretencao')
            ->allowEmptyDate('dtretencao');

        $validator
            ->scalar('bco_depositario')
            ->maxLength('bco_depositario', 45)
            ->allowEmptyString('bco_depositario');

        $validator
            ->scalar('bco_banco')
            ->maxLength('bco_banco', 10)
            ->allowEmptyString('bco_banco');

        $validator
            ->scalar('bco_agencia')
            ->maxLength('bco_agencia', 10)
            ->allowEmptyString('bco_agencia');

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
        $rules->add($rules->existsIn(['empresas_id'], 'Empresas'));
        $rules->add($rules->existsIn(['funcionarios_id'], 'Funcionarios'));
        $rules->add($rules->existsIn(['jornadatrabalhos_id'], 'Jornadatrabalhos'));

        return $rules;
    }
}
