<?php
App::uses('AppModel', 'Model');
/**
 * About Model
 *
 */
class About extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'about';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'about' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'about_short' => array(
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
