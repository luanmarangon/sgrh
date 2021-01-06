<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enquadramentos Model
 *
 * @method \App\Model\Entity\Enquadramento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enquadramento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Enquadramento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enquadramento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enquadramento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enquadramento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enquadramento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enquadramento findOrCreate($search, callable $callback = null, $options = [])
 */
class EnquadramentosTable extends Table
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

        $this->setTable('enquadramentos');
        $this->setDisplayField('id');
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
            ->scalar('alinea')
            ->maxLength('alinea', 1)
            ->allowEmptyString('alinea');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 100)
            ->allowEmptyString('descricao');

        return $validator;
    }
}
