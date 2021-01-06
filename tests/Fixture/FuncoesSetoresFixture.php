<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncoesSetoresFixture
 */
class FuncoesSetoresFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'funcoes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'setores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contratos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_funcoes_has_setores_setores1_idx' => ['type' => 'index', 'columns' => ['setores_id'], 'length' => []],
            'fk_funcoes_has_setores_funcoes1_idx' => ['type' => 'index', 'columns' => ['funcoes_id'], 'length' => []],
            'fk_funcoes_setores_contratos1_idx' => ['type' => 'index', 'columns' => ['contratos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_funcoes_has_setores_funcoes1' => ['type' => 'foreign', 'columns' => ['funcoes_id'], 'references' => ['funcoes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_funcoes_has_setores_setores1' => ['type' => 'foreign', 'columns' => ['setores_id'], 'references' => ['setores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_funcoes_setores_contratos1' => ['type' => 'foreign', 'columns' => ['contratos_id'], 'references' => ['contratos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'funcoes_id' => 1,
                'setores_id' => 1,
                'contratos_id' => 1,
            ],
        ];
        parent::init();
    }
}
