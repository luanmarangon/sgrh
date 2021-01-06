<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IrrintervalorefeicoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IrrintervalorefeicoesTable Test Case
 */
class IrrintervalorefeicoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IrrintervalorefeicoesTable
     */
    public $Irrintervalorefeicoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Irrintervalorefeicoes',
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
        $config = TableRegistry::getTableLocator()->exists('Irrintervalorefeicoes') ? [] : ['className' => IrrintervalorefeicoesTable::class];
        $this->Irrintervalorefeicoes = TableRegistry::getTableLocator()->get('Irrintervalorefeicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Irrintervalorefeicoes);

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
