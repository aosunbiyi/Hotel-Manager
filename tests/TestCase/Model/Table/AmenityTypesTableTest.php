<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AmenityTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AmenityTypesTable Test Case
 */
class AmenityTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AmenityTypesTable
     */
    public $AmenityTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.amenity_types',
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
        $config = TableRegistry::getTableLocator()->exists('AmenityTypes') ? [] : ['className' => AmenityTypesTable::class];
        $this->AmenityTypes = TableRegistry::getTableLocator()->get('AmenityTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AmenityTypes);

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
