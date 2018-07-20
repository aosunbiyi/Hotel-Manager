<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RevenueBreakdownsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RevenueBreakdownsTable Test Case
 */
class RevenueBreakdownsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RevenueBreakdownsTable
     */
    public $RevenueBreakdowns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.revenue_breakdowns'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RevenueBreakdowns') ? [] : ['className' => RevenueBreakdownsTable::class];
        $this->RevenueBreakdowns = TableRegistry::getTableLocator()->get('RevenueBreakdowns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RevenueBreakdowns);

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
