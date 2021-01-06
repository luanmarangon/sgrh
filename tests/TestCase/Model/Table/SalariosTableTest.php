<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalariosTable Test Case
 */
class SalariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalariosTable
     */
    public $Salarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Salarios',
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
        $config = TableRegistry::getTableLocator()->exists('Salarios') ? [] : ['className' => SalariosTable::class];
        $this->Salarios = TableRegistry::getTableLocator()->get('Salarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Salarios);

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
