<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IrrinterjornadasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IrrinterjornadasTable Test Case
 */
class IrrinterjornadasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IrrinterjornadasTable
     */
    public $Irrinterjornadas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Irrinterjornadas',
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
        $config = TableRegistry::getTableLocator()->exists('Irrinterjornadas') ? [] : ['className' => IrrinterjornadasTable::class];
        $this->Irrinterjornadas = TableRegistry::getTableLocator()->get('Irrinterjornadas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Irrinterjornadas);

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
