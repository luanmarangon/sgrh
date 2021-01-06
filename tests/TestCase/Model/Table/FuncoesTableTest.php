<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncoesTable Test Case
 */
class FuncoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncoesTable
     */
    public $Funcoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Funcoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Funcoes') ? [] : ['className' => FuncoesTable::class];
        $this->Funcoes = TableRegistry::getTableLocator()->get('Funcoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Funcoes);

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
