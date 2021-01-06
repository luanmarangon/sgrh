<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncoesHasSetoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncoesHasSetoresTable Test Case
 */
class FuncoesHasSetoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncoesHasSetoresTable
     */
    public $FuncoesHasSetores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FuncoesHasSetores',
        'app.Funcoes',
        'app.Setores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FuncoesHasSetores') ? [] : ['className' => FuncoesHasSetoresTable::class];
        $this->FuncoesHasSetores = TableRegistry::getTableLocator()->get('FuncoesHasSetores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FuncoesHasSetores);

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
