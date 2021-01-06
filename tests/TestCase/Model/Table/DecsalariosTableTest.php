<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DecsalariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DecsalariosTable Test Case
 */
class DecsalariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DecsalariosTable
     */
    public $Decsalarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Decsalarios',
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
        $config = TableRegistry::getTableLocator()->exists('Decsalarios') ? [] : ['className' => DecsalariosTable::class];
        $this->Decsalarios = TableRegistry::getTableLocator()->get('Decsalarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Decsalarios);

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
