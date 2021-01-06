<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DependentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DependentesTable Test Case
 */
class DependentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DependentesTable
     */
    public $Dependentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dependentes',
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
        $config = TableRegistry::getTableLocator()->exists('Dependentes') ? [] : ['className' => DependentesTable::class];
        $this->Dependentes = TableRegistry::getTableLocator()->get('Dependentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dependentes);

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
