<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuncoesSetores Model
 *
 * @property \App\Model\Table\FuncoesTable&\Cake\ORM\Association\BelongsTo $Funcoes
 * @property \App\Model\Table\SetoresTable&\Cake\ORM\Association\BelongsTo $Setores
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 *
 * @method \App\Model\Entity\FuncoesSetore get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuncoesSetore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FuncoesSetore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuncoesSetore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncoesSetore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncoesSetore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuncoesSetore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuncoesSetore findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncoesSetoresTable extends Table
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

        $this->setTable('funcoes_setores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Funcoes', [
            'foreignKey' => 'funcoes_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Setores', [
            'foreignKey' => 'setores_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['funcoes_id'], 'Funcoes'));
        $rules->add($rules->existsIn(['setores_id'], 'Setores'));
        $rules->add($rules->existsIn(['contratos_id'], 'Contratos'));

        return $rules;
    }
}
