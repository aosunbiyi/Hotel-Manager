<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtraChargeCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtraChargeCategoriesTable Test Case
 */
class ExtraChargeCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtraChargeCategoriesTable
     */
    public $ExtraChargeCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.extra_charge_categories',
        'app.extra_charges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ExtraChargeCategories') ? [] : ['className' => ExtraChargeCategoriesTable::class];
        $this->ExtraChargeCategories = TableRegistry::getTableLocator()->get('ExtraChargeCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExtraChargeCategories);

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
