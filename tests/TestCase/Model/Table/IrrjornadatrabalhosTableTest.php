<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IrrjornadatrabalhosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IrrjornadatrabalhosTable Test Case
 */
class IrrjornadatrabalhosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IrrjornadatrabalhosTable
     */
    public $Irrjornadatrabalhos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Irrjornadatrabalhos',
        'app.Contratos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Irrjornadatrabalhos') ? [] : ['className' => IrrjornadatrabalhosTable::class];
        $this->Irrjornadatrabalhos = TableRegistry::getTableLocator()->get('Irrjornadatrabalhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Irrjornadatrabalhos);

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
