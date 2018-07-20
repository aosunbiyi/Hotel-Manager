<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomImagesTable Test Case
 */
class RoomImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomImagesTable
     */
    public $RoomImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_images',
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
        $config = TableRegistry::getTableLocator()->exists('RoomImages') ? [] : ['className' => RoomImagesTable::class];
        $this->RoomImages = TableRegistry::getTableLocator()->get('RoomImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomImages);

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
