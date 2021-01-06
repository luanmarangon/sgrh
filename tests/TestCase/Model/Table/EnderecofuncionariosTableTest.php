<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnderecofuncionariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnderecofuncionariosTable Test Case
 */
class EnderecofuncionariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnderecofuncionariosTable
     */
    public $Enderecofuncionarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Enderecofuncionarios',
        'app.Funcionarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Enderecofuncionarios') ? [] : ['className' => EnderecofuncionariosTable::class];
        $this->Enderecofuncionarios = TableRegistry::getTableLocator()->get('Enderecofuncionarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Enderecofuncionarios);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
