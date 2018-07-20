<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailAccountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailAccountsTable Test Case
 */
class EmailAccountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailAccountsTable
     */
    public $EmailAccounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.email_accounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmailAccounts') ? [] : ['className' => EmailAccountsTable::class];
        $this->EmailAccounts = TableRegistry::getTableLocator()->get('EmailAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmailAccounts);

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
