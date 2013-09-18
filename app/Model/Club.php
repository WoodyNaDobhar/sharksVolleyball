<?php
App::uses('AppModel', 'Model');
/**
 * Club Model
 *
 */
class Club extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'club';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'club' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
