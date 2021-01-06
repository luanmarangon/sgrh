<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnquadramentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnquadramentosTable Test Case
 */
class EnquadramentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnquadramentosTable
     */
    public $Enquadramentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Enquadramentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Enquadramentos') ? [] : ['className' => EnquadramentosTable::class];
        $this->Enquadramentos = TableRegistry::getTableLocator()->get('Enquadramentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Enquadramentos);

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
