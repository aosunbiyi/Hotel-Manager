<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdentitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdentitiesTable Test Case
 */
class IdentitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IdentitiesTable
     */
    public $Identities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.identities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Identities') ? [] : ['className' => IdentitiesTable::class];
        $this->Identities = TableRegistry::getTableLocator()->get('Identities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Identities);

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
