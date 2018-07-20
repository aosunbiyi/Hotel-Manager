<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DnrListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DnrListsTable Test Case
 */
class DnrListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DnrListsTable
     */
    public $DnrLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dnr_lists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DnrLists') ? [] : ['className' => DnrListsTable::class];
        $this->DnrLists = TableRegistry::getTableLocator()->get('DnrLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DnrLists);

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
