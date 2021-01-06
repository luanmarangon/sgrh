<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratosTable Test Case
 */
class ContratosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratosTable
     */
    public $Contratos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contratos',
        'app.Empresas',
        'app.Funcionarios',
        'app.Jornadatrabalhos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contratos') ? [] : ['className' => ContratosTable::class];
        $this->Contratos = TableRegistry::getTableLocator()->get('Contratos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contratos);

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
