<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MainconfigTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MainconfigTable Test Case
 */
class MainconfigTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MainconfigTable
     */
    public $Mainconfig;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mainconfig'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mainconfig') ? [] : ['className' => MainconfigTable::class];
        $this->Mainconfig = TableRegistry::getTableLocator()->get('Mainconfig', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mainconfig);

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
