<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomTypesRatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomTypesRatesTable Test Case
 */
class RoomTypesRatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomTypesRatesTable
     */
    public $RoomTypesRates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_types_rates',
        'app.room_types',
        'app.rates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoomTypesRates') ? [] : ['className' => RoomTypesRatesTable::class];
        $this->RoomTypesRates = TableRegistry::getTableLocator()->get('RoomTypesRates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomTypesRates);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
