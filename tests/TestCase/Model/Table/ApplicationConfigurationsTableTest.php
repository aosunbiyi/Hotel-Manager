<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationConfigurationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationConfigurationsTable Test Case
 */
class ApplicationConfigurationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationConfigurationsTable
     */
    public $ApplicationConfigurations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.application_configurations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ApplicationConfigurations') ? [] : ['className' => ApplicationConfigurationsTable::class];
        $this->ApplicationConfigurations = TableRegistry::getTableLocator()->get('ApplicationConfigurations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApplicationConfigurations);

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
