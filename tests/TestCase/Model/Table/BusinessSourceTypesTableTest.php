<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessSourceTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessSourceTypesTable Test Case
 */
class BusinessSourceTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessSourceTypesTable
     */
    public $BusinessSourceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('BusinessSourceTypes') ? [] : ['className' => BusinessSourceTypesTable::class];
        $this->BusinessSourceTypes = TableRegistry::getTableLocator()->get('BusinessSourceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusinessSourceTypes);

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
