<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvoiceSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvoiceSettingsTable Test Case
 */
class InvoiceSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InvoiceSettingsTable
     */
    public $InvoiceSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.invoice_settings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InvoiceSettings') ? [] : ['className' => InvoiceSettingsTable::class];
        $this->InvoiceSettings = TableRegistry::getTableLocator()->get('InvoiceSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InvoiceSettings);

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
