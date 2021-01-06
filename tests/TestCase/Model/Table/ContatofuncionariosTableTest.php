<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatofuncionariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatofuncionariosTable Test Case
 */
class ContatofuncionariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatofuncionariosTable
     */
    public $Contatofuncionarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contatofuncionarios',
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
        $config = TableRegistry::getTableLocator()->exists('Contatofuncionarios') ? [] : ['className' => ContatofuncionariosTable::class];
        $this->Contatofuncionarios = TableRegistry::getTableLocator()->get('Contatofuncionarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contatofuncionarios);

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
