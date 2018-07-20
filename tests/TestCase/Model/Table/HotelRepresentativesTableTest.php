<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelRepresentativesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelRepresentativesTable Test Case
 */
class HotelRepresentativesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelRepresentativesTable
     */
    public $HotelRepresentatives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hotel_representatives',
        'app.accounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HotelRepresentatives') ? [] : ['className' => HotelRepresentativesTable::class];
        $this->HotelRepresentatives = TableRegistry::getTableLocator()->get('HotelRepresentatives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HotelRepresentatives);

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
