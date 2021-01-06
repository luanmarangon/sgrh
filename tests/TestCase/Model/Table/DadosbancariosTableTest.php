<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DadosbancariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DadosbancariosTable Test Case
 */
class DadosbancariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DadosbancariosTable
     */
    public $Dadosbancarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dadosbancarios',
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
        $config = TableRegistry::getTableLocator()->exists('Dadosbancarios') ? [] : ['className' => DadosbancariosTable::class];
        $this->Dadosbancarios = TableRegistry::getTableLocator()->get('Dadosbancarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dadosbancarios);

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
