<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contatoempresas Model
 *
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Contatoempresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contatoempresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contatoempresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contatoempresa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contatoempresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contatoempresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contatoempresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contatoempresa findOrCreate($search, callable $callback = null, $options = [])
 */
class ContatoempresasTable extends Table
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

        $this->setTable('contatoempresas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
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
            ->scalar('telefone')
            ->maxLength('telefone', 14)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 20)
            ->allowEmptyString('responsavel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('ramal')
            ->maxLength('ramal', 8)
            ->allowEmptyString('ramal');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 15)
            ->allowEmptyString('celular');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
