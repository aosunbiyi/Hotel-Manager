<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardTypePrefixesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardTypePrefixesTable Test Case
 */
class CardTypePrefixesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CardTypePrefixesTable
     */
    public $CardTypePrefixes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.card_type_prefixes',
        'app.settlement_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CardTypePrefixes') ? [] : ['className' => CardTypePrefixesTable::class];
        $this->CardTypePrefixes = TableRegistry::getTableLocator()->get('CardTypePrefixes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CardTypePrefixes);

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
