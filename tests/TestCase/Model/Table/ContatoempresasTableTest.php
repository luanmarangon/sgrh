<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatoempresasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatoempresasTable Test Case
 */
class ContatoempresasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatoempresasTable
     */
    public $Contatoempresas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contatoempresas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contatoempresas') ? [] : ['className' => ContatoempresasTable::class];
        $this->Contatoempresas = TableRegistry::getTableLocator()->get('Contatoempresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contatoempresas);

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
