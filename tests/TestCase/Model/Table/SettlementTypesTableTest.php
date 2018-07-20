<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SettlementTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SettlementTypesTable Test Case
 */
class SettlementTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SettlementTypesTable
     */
    public $SettlementTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.settlement_types',
        'app.card_type_prefixes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SettlementTypes') ? [] : ['className' => SettlementTypesTable::class];
        $this->SettlementTypes = TableRegistry::getTableLocator()->get('SettlementTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SettlementTypes);

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
