<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RemarkCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RemarkCategoriesTable Test Case
 */
class RemarkCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RemarkCategoriesTable
     */
    public $RemarkCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.remark_categories',
        'app.remarks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RemarkCategories') ? [] : ['className' => RemarkCategoriesTable::class];
        $this->RemarkCategories = TableRegistry::getTableLocator()->get('RemarkCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RemarkCategories);

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
