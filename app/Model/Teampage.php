<?php
App::uses('AppModel', 'Model');
/**
 * Teampage Model
 *
 */
class Teampage extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'teampage';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'schedule' => array(
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
