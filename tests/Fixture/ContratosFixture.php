<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosFixture
 */
class ContratosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'matricula' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'admissao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'exadmissional' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'exp_inicio' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'exp_fim' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'nomeuser' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ramal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mailprof' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'optante' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'dtopcao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dtretencao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'bco_depositario' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'bco_banco' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'bco_agencia' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'empresas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'funcionarios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'jornadatrabalhos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_contratos_empresas1_idx' => ['type' => 'index', 'columns' => ['empresas_id'], 'length' => []],
            'fk_contratos_funcionarios1_idx' => ['type' => 'index', 'columns' => ['funcionarios_id'], 'length' => []],
            'fk_contratos_jornadatrabalhos1_idx' => ['type' => 'index', 'columns' => ['jornadatrabalhos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_contratos_empresas1' => ['type' => 'foreign', 'columns' => ['empresas_id'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contratos_funcionarios1' => ['type' => 'foreign', 'columns' => ['funcionarios_id'], 'references' => ['funcionarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contratos_jornadatrabalhos1' => ['type' => 'foreign', 'columns' => ['jornadatrabalhos_id'], 'references' => ['jornadatrabalhos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'matricula' => 1,
                'admissao' => '2020-06-08',
                'exadmissional' => '2020-06-08',
                'exp_inicio' => '2020-06-08',
                'exp_fim' => '2020-06-08',
                'nomeuser' => 'Lorem ipsum dolor sit amet',
                'ramal' => 1,
                'mailprof' => 'Lorem ipsum dolor sit amet',
                'optante' => 'L',
                'dtopcao' => '2020-06-08',
                'dtretencao' => '2020-06-08',
                'bco_depositario' => 'Lorem ipsum dolor sit amet',
                'bco_banco' => 'Lorem ip',
                'bco_agencia' => 'Lorem ip',
                'empresas_id' => 1,
                'funcionarios_id' => 1,
                'jornadatrabalhos_id' => 1,
            ],
        ];
        parent::init();
    }
}
