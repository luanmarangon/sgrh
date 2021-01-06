<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JornadatrabalhosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JornadatrabalhosTable Test Case
 */
class JornadatrabalhosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JornadatrabalhosTable
     */
    public $Jornadatrabalhos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jornadatrabalhos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jornadatrabalhos') ? [] : ['className' => JornadatrabalhosTable::class];
        $this->Jornadatrabalhos = TableRegistry::getTableLocator()->get('Jornadatrabalhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jornadatrabalhos);

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
}
