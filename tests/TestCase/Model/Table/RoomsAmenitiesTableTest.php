<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomsAmenitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomsAmenitiesTable Test Case
 */
class RoomsAmenitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomsAmenitiesTable
     */
    public $RoomsAmenities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rooms_amenities',
        'app.rooms',
        'app.amenities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoomsAmenities') ? [] : ['className' => RoomsAmenitiesTable::class];
        $this->RoomsAmenities = TableRegistry::getTableLocator()->get('RoomsAmenities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomsAmenities);

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
