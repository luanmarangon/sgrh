<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipodeficiencias Model
 *
 * @method \App\Model\Entity\Tipodeficiencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipodeficiencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipodeficiencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipodeficiencia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipodeficiencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipodeficiencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipodeficiencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipodeficiencia findOrCreate($search, callable $callback = null, $options = [])
 */
class TipodeficienciasTable extends Table
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

        $this->setTable('tipodeficiencias');
        $this->setDisplayField('deficiencia');
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
            ->scalar('deficiencia')
            ->maxLength('deficiencia', 45)
            ->allowEmptyString('deficiencia');

        return $validator;
    }
}
