<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentosTable Test Case
 */
class DepartamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartamentosTable
     */
    public $Departamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Departamentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Departamentos') ? [] : ['className' => DepartamentosTable::class];
        $this->Departamentos = TableRegistry::getTableLocator()->get('Departamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departamentos);

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
