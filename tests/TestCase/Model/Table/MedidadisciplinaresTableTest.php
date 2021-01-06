<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedidadisciplinaresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedidadisciplinaresTable Test Case
 */
class MedidadisciplinaresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedidadisciplinaresTable
     */
    public $Medidadisciplinares;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Medidadisciplinares',
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
        $config = TableRegistry::getTableLocator()->exists('Medidadisciplinares') ? [] : ['className' => MedidadisciplinaresTable::class];
        $this->Medidadisciplinares = TableRegistry::getTableLocator()->get('Medidadisciplinares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Medidadisciplinares);

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
