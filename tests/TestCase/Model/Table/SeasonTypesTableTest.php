<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeasonTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeasonTypesTable Test Case
 */
class SeasonTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeasonTypesTable
     */
    public $SeasonTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.season_types',
        'app.seasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SeasonTypes') ? [] : ['className' => SeasonTypesTable::class];
        $this->SeasonTypes = TableRegistry::getTableLocator()->get('SeasonTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SeasonTypes);

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
