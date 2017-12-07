<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TurbinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TurbinesTable Test Case
 */
class TurbinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TurbinesTable
     */
    public $Turbines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.turbines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Turbines') ? [] : ['className' => TurbinesTable::class];
        $this->Turbines = TableRegistry::get('Turbines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Turbines);

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
