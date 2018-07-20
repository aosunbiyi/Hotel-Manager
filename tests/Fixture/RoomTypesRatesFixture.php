<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomTypesRatesFixture
 *
 */
class RoomTypesRatesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'room_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rate_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'rate_key5600' => ['type' => 'index', 'columns' => ['rate_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['room_type_id', 'rate_id'], 'length' => []],
            'rate_key5600' => ['type' => 'foreign', 'columns' => ['rate_id'], 'references' => ['rates', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'room_types_key5600' => ['type' => 'foreign', 'columns' => ['room_type_id'], 'references' => ['room_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'room_type_id' => 1,
                'rate_id' => 1
            ],
        ];
        parent::init();
    }
}
