<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsosTable Test Case
 */
class AsosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsosTable
     */
    public $Asos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Asos',
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
        $config = TableRegistry::getTableLocator()->exists('Asos') ? [] : ['className' => AsosTable::class];
        $this->Asos = TableRegistry::getTableLocator()->get('Asos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Asos);

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
