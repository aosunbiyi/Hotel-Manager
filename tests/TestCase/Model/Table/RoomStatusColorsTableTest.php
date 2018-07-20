<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomStatusColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomStatusColorsTable Test Case
 */
class RoomStatusColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomStatusColorsTable
     */
    public $RoomStatusColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_status_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoomStatusColors') ? [] : ['className' => RoomStatusColorsTable::class];
        $this->RoomStatusColors = TableRegistry::getTableLocator()->get('RoomStatusColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomStatusColors);

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
