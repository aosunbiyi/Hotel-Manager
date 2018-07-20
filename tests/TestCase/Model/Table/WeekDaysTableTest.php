<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeekDaysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeekDaysTable Test Case
 */
class WeekDaysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeekDaysTable
     */
    public $WeekDays;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.week_days',
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
        $config = TableRegistry::getTableLocator()->exists('WeekDays') ? [] : ['className' => WeekDaysTable::class];
        $this->WeekDays = TableRegistry::getTableLocator()->get('WeekDays', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WeekDays);

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
