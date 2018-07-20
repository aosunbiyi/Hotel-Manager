<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertysetupTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertysetupTable Test Case
 */
class PropertysetupTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertysetupTable
     */
    public $Propertysetup;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.propertysetup'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Propertysetup') ? [] : ['className' => PropertysetupTable::class];
        $this->Propertysetup = TableRegistry::getTableLocator()->get('Propertysetup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Propertysetup);

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
