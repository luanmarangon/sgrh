<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscalasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscalasTable Test Case
 */
class EscalasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EscalasTable
     */
    public $Escalas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Escalas',
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
        $config = TableRegistry::getTableLocator()->exists('Escalas') ? [] : ['className' => EscalasTable::class];
        $this->Escalas = TableRegistry::getTableLocator()->get('Escalas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Escalas);

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
