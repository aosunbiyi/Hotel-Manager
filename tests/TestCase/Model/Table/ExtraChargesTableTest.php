<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtraChargesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtraChargesTable Test Case
 */
class ExtraChargesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtraChargesTable
     */
    public $ExtraCharges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.extra_charges',
        'app.extra_charge_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ExtraCharges') ? [] : ['className' => ExtraChargesTable::class];
        $this->ExtraCharges = TableRegistry::getTableLocator()->get('ExtraCharges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExtraCharges);

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
