<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asos Model
 *
 * @property \App\Model\Table\FuncionariosTable&\Cake\ORM\Association\BelongsTo $Funcionarios
 *
 * @method \App\Model\Entity\Aso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aso findOrCreate($search, callable $callback = null, $options = [])
 */
class AsosTable extends Table
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

        $this->setTable('asos');
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
            ->date('dt_exame')
            ->allowEmptyDate('dt_exame');

        $validator
            ->scalar('exame')
            ->maxLength('exame', 45)
            ->allowEmptyString('exame');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->date('proximo_exame')
            ->allowEmptyDate('proximo_exame');

        $validator
            ->scalar('anexo')
            ->maxLength('anexo', 150)
            ->allowEmptyString('anexo');

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
