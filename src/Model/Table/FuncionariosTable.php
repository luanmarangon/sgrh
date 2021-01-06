<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionarios Model
 *
 * @property \App\Model\Table\TipodeficienciasTable&\Cake\ORM\Association\BelongsTo $Tipodeficiencias
 *
 * @method \App\Model\Entity\Funcionario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcionario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncionariosTable extends Table
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

        $this->setTable('funcionarios');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tipodeficiencias', [
            'foreignKey' => 'tipodeficiencias_id',
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
            ->scalar('sexo')
            ->maxLength('sexo', 1)
            ->allowEmptyString('sexo');

        $validator
            ->scalar('etinia')
            ->maxLength('etinia', 10)
            ->allowEmptyString('etinia');

        $validator
            ->scalar('cabelo')
            ->maxLength('cabelo', 10)
            ->allowEmptyString('cabelo');

        $validator
            ->scalar('olhos')
            ->maxLength('olhos', 10)
            ->allowEmptyString('olhos');

        $validator
            ->date('dt_nascimento')
            ->allowEmptyDate('dt_nascimento');

        $validator
            ->scalar('est_civil')
            ->maxLength('est_civil', 10)
            ->allowEmptyString('est_civil');

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
            ->scalar('escolaridade')
            ->maxLength('escolaridade', 20)
            ->allowEmptyString('escolaridade');

        $validator
            ->scalar('mail_pessoal')
            ->maxLength('mail_pessoal', 45)
            ->allowEmptyString('mail_pessoal');

        $validator
            ->scalar('pai')
            ->maxLength('pai', 45)
            ->allowEmptyString('pai');

        $validator
            ->scalar('mae')
            ->maxLength('mae', 45)
            ->allowEmptyString('mae');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 1)
            ->allowEmptyString('ativo');

        $validator
            ->date('dtcadastro')
            ->allowEmptyDate('dtcadastro');

        $validator
            ->scalar('num_carteira')
            ->maxLength('num_carteira', 45)
            ->allowEmptyString('num_carteira');

        $validator
            ->scalar('registro_geral')
            ->maxLength('registro_geral', 45)
            ->allowEmptyString('registro_geral');

        $validator
            ->scalar('naturalizado')
            ->maxLength('naturalizado', 45)
            ->allowEmptyString('naturalizado');

        $validator
            ->date('dt_chg_br')
            ->allowEmptyDate('dt_chg_br');

        $validator
            ->scalar('casado_brasileiro')
            ->maxLength('casado_brasileiro', 1)
            ->allowEmptyString('casado_brasileiro');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 14)
            ->allowEmptyString('cpf');

        $validator
            ->scalar('cart_trabalho')
            ->maxLength('cart_trabalho', 15)
            ->allowEmptyString('cart_trabalho');

        $validator
            ->scalar('serie')
            ->maxLength('serie', 10)
            ->allowEmptyString('serie');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 45)
            ->allowEmptyString('cidade');

        $validator
            ->date('dt_emis_cart')
            ->allowEmptyDate('dt_emis_cart');

        $validator
            ->scalar('pis')
            ->maxLength('pis', 45)
            ->allowEmptyString('pis');

        $validator
            ->date('dt_cad_pis')
            ->allowEmptyDate('dt_cad_pis');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 13)
            ->allowEmptyString('rg');

        $validator
            ->scalar('orgao')
            ->maxLength('orgao', 10)
            ->allowEmptyString('orgao');

        $validator
            ->scalar('uf_rg')
            ->maxLength('uf_rg', 2)
            ->allowEmptyString('uf_rg');

        $validator
            ->date('dt_emis_rg')
            ->allowEmptyDate('dt_emis_rg');

        $validator
            ->scalar('habilitacao')
            ->maxLength('habilitacao', 20)
            ->allowEmptyString('habilitacao');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 2)
            ->allowEmptyString('categoria');

        $validator
            ->scalar('uf_cnh')
            ->maxLength('uf_cnh', 2)
            ->allowEmptyString('uf_cnh');

        $validator
            ->date('validade_cnh')
            ->allowEmptyDate('validade_cnh');

        $validator
            ->scalar('reservista')
            ->maxLength('reservista', 45)
            ->allowEmptyString('reservista');

        $validator
            ->scalar('titulo_eleitor')
            ->maxLength('titulo_eleitor', 15)
            ->allowEmptyString('titulo_eleitor');

        $validator
            ->scalar('titulo_zona')
            ->maxLength('titulo_zona', 10)
            ->allowEmptyString('titulo_zona');

        $validator
            ->scalar('titulo_secao')
            ->maxLength('titulo_secao', 10)
            ->allowEmptyString('titulo_secao');

        $validator
            ->date('titulo_dt_emissao')
            ->allowEmptyDate('titulo_dt_emissao');

        $validator
            ->scalar('conjugue')
            ->maxLength('conjugue', 45)
            ->allowEmptyString('conjugue');

        $validator
            ->scalar('conj_sexo')
            ->maxLength('conj_sexo', 1)
            ->allowEmptyString('conj_sexo');

        $validator
            ->date('conj_nascimento')
            ->allowEmptyDate('conj_nascimento');

        $validator
            ->scalar('conj_rg')
            ->maxLength('conj_rg', 13)
            ->allowEmptyString('conj_rg');

        $validator
            ->scalar('conj_uf_rg')
            ->maxLength('conj_uf_rg', 2)
            ->allowEmptyString('conj_uf_rg');

        $validator
            ->scalar('conj_cpf')
            ->maxLength('conj_cpf', 13)
            ->allowEmptyString('conj_cpf');

        $validator
            ->scalar('conj_naturalidade')
            ->maxLength('conj_naturalidade', 45)
            ->allowEmptyString('conj_naturalidade');

        $validator
            ->scalar('conj_uf_naturalidade')
            ->maxLength('conj_uf_naturalidade', 2)
            ->allowEmptyString('conj_uf_naturalidade');

        $validator
            ->scalar('conj_nascionalidade')
            ->maxLength('conj_nascionalidade', 15)
            ->allowEmptyString('conj_nascionalidade');

        $validator
            ->date('dt_cadamento')
            ->allowEmptyDate('dt_cadamento');

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
        $rules->add($rules->existsIn(['tipodeficiencias_id'], 'Tipodeficiencias'));

        return $rules;
    }
}
