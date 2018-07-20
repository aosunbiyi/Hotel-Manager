<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaxSettingTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaxSettingTypesTable Test Case
 */
class TaxSettingTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaxSettingTypesTable
     */
    public $TaxSettingTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tax_setting_types',
        'app.tax_settings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TaxSettingTypes') ? [] : ['className' => TaxSettingTypesTable::class];
        $this->TaxSettingTypes = TableRegistry::getTableLocator()->get('TaxSettingTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TaxSettingTypes);

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
