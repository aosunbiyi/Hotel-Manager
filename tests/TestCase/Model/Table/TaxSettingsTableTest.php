<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaxSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaxSettingsTable Test Case
 */
class TaxSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaxSettingsTable
     */
    public $TaxSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tax_settings',
        'app.tax_setting_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TaxSettings') ? [] : ['className' => TaxSettingsTable::class];
        $this->TaxSettings = TableRegistry::getTableLocator()->get('TaxSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TaxSettings);

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
