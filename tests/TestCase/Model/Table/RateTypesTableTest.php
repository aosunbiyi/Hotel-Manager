<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RateTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RateTypesTable Test Case
 */
class RateTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RateTypesTable
     */
    public $RateTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rate_types',
        'app.rates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RateTypes') ? [] : ['className' => RateTypesTable::class];
        $this->RateTypes = TableRegistry::getTableLocator()->get('RateTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RateTypes);

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
