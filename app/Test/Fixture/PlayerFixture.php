<?php
/**
 * PlayerFixture
 *
 */
class PlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mothers_first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mothers_last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fathers_first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fathers_last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'zip' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'home_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cell_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'parents_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'school' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'grade' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'birthday' => array('type' => 'date', 'null' => false, 'default' => null),
		'graduation_year' => array('type' => 'text', 'null' => false, 'default' => null, 'length' => 4),
		'play_last' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'play_where' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'try_other' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'try_where' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'waiver' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'user_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit a',
			'last_name' => 'Lorem ipsum dolor sit a',
			'mothers_first_name' => 'Lorem ipsum dolor sit a',
			'mothers_last_name' => 'Lorem ipsum dolor sit a',
			'fathers_first_name' => 'Lorem ipsum dolor sit a',
			'fathers_last_name' => 'Lorem ipsum dolor sit a',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state_id' => 1,
			'zip' => 1,
			'home_phone' => 'Lorem ipsum',
			'cell_phone' => 'Lorem ipsum',
			'parents_email' => 'Lorem ipsum dolor sit amet',
			'school' => 'Lorem ipsum dolor sit amet',
			'grade' => 1,
			'birthday' => '2013-09-17',
			'graduation_year' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'play_last' => 1,
			'play_where' => 'Lorem ipsum dolor sit amet',
			'try_other' => 1,
			'try_where' => 'Lorem ipsum dolor sit amet',
			'team_id' => 1,
			'waiver' => 1
		),
	);

}
