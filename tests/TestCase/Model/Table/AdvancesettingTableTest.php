<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdvancesettingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdvancesettingTable Test Case
 */
class AdvancesettingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdvancesettingTable
     */
    public $Advancesetting;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.advancesetting'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Advancesetting') ? [] : ['className' => AdvancesettingTable::class];
        $this->Advancesetting = TableRegistry::getTableLocator()->get('Advancesetting', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Advancesetting);

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
