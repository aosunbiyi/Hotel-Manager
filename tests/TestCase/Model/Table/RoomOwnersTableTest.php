<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomOwnersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomOwnersTable Test Case
 */
class RoomOwnersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomOwnersTable
     */
    public $RoomOwners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_owners',
        'app.rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoomOwners') ? [] : ['className' => RoomOwnersTable::class];
        $this->RoomOwners = TableRegistry::getTableLocator()->get('RoomOwners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomOwners);

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
