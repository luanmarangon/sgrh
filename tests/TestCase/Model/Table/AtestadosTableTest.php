<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtestadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtestadosTable Test Case
 */
class AtestadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtestadosTable
     */
    public $Atestados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atestados',
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
        $config = TableRegistry::getTableLocator()->exists('Atestados') ? [] : ['className' => AtestadosTable::class];
        $this->Atestados = TableRegistry::getTableLocator()->get('Atestados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atestados);

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
