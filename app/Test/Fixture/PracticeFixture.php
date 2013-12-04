<?php
/**
 * PracticeFixture
 *
 */
class PracticeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'start' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'duration' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'location' => array('type' => 'string', 'null' => false, 'default' => 'TBA', 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'team_id' => 1,
			'start' => '2013-12-03 22:24:54',
			'duration' => 1,
			'location' => 'Lo'
		),
	);

}
