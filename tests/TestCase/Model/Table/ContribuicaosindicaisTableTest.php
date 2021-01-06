<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContribuicaosindicaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContribuicaosindicaisTable Test Case
 */
class ContribuicaosindicaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContribuicaosindicaisTable
     */
    public $Contribuicaosindicais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contribuicaosindicais',
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
        $config = TableRegistry::getTableLocator()->exists('Contribuicaosindicais') ? [] : ['className' => ContribuicaosindicaisTable::class];
        $this->Contribuicaosindicais = TableRegistry::getTableLocator()->get('Contribuicaosindicais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contribuicaosindicais);

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
