<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessSourcesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessSourcesTable Test Case
 */
class BusinessSourcesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessSourcesTable
     */
    public $BusinessSources;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.business_sources',
        'app.business_source_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BusinessSources') ? [] : ['className' => BusinessSourcesTable::class];
        $this->BusinessSources = TableRegistry::getTableLocator()->get('BusinessSources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusinessSources);

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
