<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NonRentalUnitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NonRentalUnitsTable Test Case
 */
class NonRentalUnitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NonRentalUnitsTable
     */
    public $NonRentalUnits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.non_rental_units'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NonRentalUnits') ? [] : ['className' => NonRentalUnitsTable::class];
        $this->NonRentalUnits = TableRegistry::getTableLocator()->get('NonRentalUnits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NonRentalUnits);

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
