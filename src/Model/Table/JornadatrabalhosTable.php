<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jornadatrabalhos Model
 *
 * @method \App\Model\Entity\Jornadatrabalho get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jornadatrabalho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jornadatrabalho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jornadatrabalho|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jornadatrabalho saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jornadatrabalho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jornadatrabalho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jornadatrabalho findOrCreate($search, callable $callback = null, $options = [])
 */
class JornadatrabalhosTable extends Table
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

        $this->setTable('jornadatrabalhos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');
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
            ->scalar('descricao')
            ->maxLength('descricao', 80)
            ->allowEmptyString('descricao');

        $validator
            ->time('inicio')
            ->allowEmptyTime('inicio');

        $validator
            ->time('fim')
            ->allowEmptyTime('fim');

        $validator
            ->time('almoco')
            ->allowEmptyTime('almoco');

        $validator
            ->scalar('descanco')
            ->maxLength('descanco', 15)
            ->allowEmptyString('descanco');

        return $validator;
    }
}
