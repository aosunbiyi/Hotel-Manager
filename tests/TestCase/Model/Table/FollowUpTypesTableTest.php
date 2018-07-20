<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FollowUpTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FollowUpTypesTable Test Case
 */
class FollowUpTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FollowUpTypesTable
     */
    public $FollowUpTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.follow_up_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FollowUpTypes') ? [] : ['className' => FollowUpTypesTable::class];
        $this->FollowUpTypes = TableRegistry::getTableLocator()->get('FollowUpTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FollowUpTypes);

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
