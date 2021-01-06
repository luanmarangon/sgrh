<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IrrmarcacaopontosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IrrmarcacaopontosTable Test Case
 */
class IrrmarcacaopontosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IrrmarcacaopontosTable
     */
    public $Irrmarcacaopontos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Irrmarcacaopontos',
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
        $config = TableRegistry::getTableLocator()->exists('Irrmarcacaopontos') ? [] : ['className' => IrrmarcacaopontosTable::class];
        $this->Irrmarcacaopontos = TableRegistry::getTableLocator()->get('Irrmarcacaopontos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Irrmarcacaopontos);

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
