<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeriasTable Test Case
 */
class FeriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeriasTable
     */
    public $Ferias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ferias',
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
        $config = TableRegistry::getTableLocator()->exists('Ferias') ? [] : ['className' => FeriasTable::class];
        $this->Ferias = TableRegistry::getTableLocator()->get('Ferias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ferias);

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
