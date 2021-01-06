<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipodeficienciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipodeficienciasTable Test Case
 */
class TipodeficienciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipodeficienciasTable
     */
    public $Tipodeficiencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tipodeficiencias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tipodeficiencias') ? [] : ['className' => TipodeficienciasTable::class];
        $this->Tipodeficiencias = TableRegistry::getTableLocator()->get('Tipodeficiencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipodeficiencias);

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
