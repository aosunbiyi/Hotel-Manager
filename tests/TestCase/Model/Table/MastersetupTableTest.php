<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MastersetupTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MastersetupTable Test Case
 */
class MastersetupTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MastersetupTable
     */
    public $Mastersetup;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mastersetup'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mastersetup') ? [] : ['className' => MastersetupTable::class];
        $this->Mastersetup = TableRegistry::getTableLocator()->get('Mastersetup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mastersetup);

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
