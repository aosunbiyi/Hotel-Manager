<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomsAmenitiesFixture
 *
 */
class RoomsAmenitiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'room_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'amenity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'amenities_key600' => ['type' => 'index', 'columns' => ['amenity_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['room_id', 'amenity_id'], 'length' => []],
            'amenities_key600' => ['type' => 'foreign', 'columns' => ['amenity_id'], 'references' => ['amenities', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'room_key600' => ['type' => 'foreign', 'columns' => ['room_id'], 'references' => ['rooms', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'room_id' => 1,
                'amenity_id' => 1
            ],
        ];
        parent::init();
    }
}
