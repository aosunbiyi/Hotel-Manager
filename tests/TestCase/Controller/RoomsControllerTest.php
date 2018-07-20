<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RoomsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RoomsController Test Case
 */
class RoomsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rooms',
        'app.room_types',
        'app.wings',
        'app.room_owners',
        'app.room_images',
        'app.amenities',
        'app.week_days',
        'app.rooms_amenities',
        'app.rooms_week_days'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
