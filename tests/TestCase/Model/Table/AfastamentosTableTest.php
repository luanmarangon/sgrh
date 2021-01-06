<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AfastamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AfastamentosTable Test Case
 */
class AfastamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AfastamentosTable
     */
    public $Afastamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Afastamentos',
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
        $config = TableRegistry::getTableLocator()->exists('Afastamentos') ? [] : ['className' => AfastamentosTable::class];
        $this->Afastamentos = TableRegistry::getTableLocator()->get('Afastamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Afastamentos);

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
