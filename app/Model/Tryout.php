<?php
App::uses('AppModel', 'Model');
/**
 * Tryout Model
 *
 * @property Division $Division
 */
class Tryout extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ends';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'begins' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ends' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Player' => array(
			'className' => 'Player',
			'foreignKey' => 'tryout_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Division' => array(
			'className' => 'Division',
			'joinTable' => 'divisions_tryouts',
			'foreignKey' => 'tryout_id',
			'associationForeignKey' => 'division_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	/**
	*
	* Returns whether or not a tryout is currently going on.
	*
	**/
	function inPhase(){
		
		//setup
		$today = date('Y-m-d');
		
		//how many are active?
		$tryouts = $this->find('count', array(
			'conditions'	=> array(
				'and'	=> array(
					'begins <='	=> $today,
					'ends >='	=> $today
				)
			)
		));
		
		if($tryouts < 1){
			return false;
		}else{
			return true;
		}
	}
	
	function getPhaseDivisions(){
		
		//setup
		$today = date('Y-m-d');
		$divisions = array();
		
		//get active
		$tryouts = $this->find('all', array(
			'conditions'	=> array(
				'and'	=> array(
					'begins <='	=> $today,
					'ends >='	=> $today
				)
			)
		));
		
		//build a list of the divisions active
		foreach($tryouts as $tryout){
			foreach($tryout['Division'] as $division){
				$divisions[$division['id']] = $division['name'];
			}
		}
		
		return $divisions;
	}
	
	function getByDivision($division_id = null){
		
		//setup
		$today = date('Y-m-d');
		
		//check
		if($division_id == null){
			return false;
		}else{
			
			//get the division
			$division = $this->Division->findById($division_id);
			
			return $division['Tryout'][0]['id'];
		}
	}
	
	function getRecentDivisions(){
		
		//setup
		$today = date('Y-m-d');
		$threeMonthsAgo = date('Y-m-d', strtotime('-3 month'));
		$divisions = array();
		
		//get any divisions that have ended, but only did so in the last three months.
		$tryouts = $this->find('all', array(
			'conditions'	=> array(
				'and'	=> array(
					'ends <='	=> $today,
					'ends >='	=> $threeMonthsAgo
				)
			)
		));
		
		//build a list of the divisions active
		foreach($tryouts as $tryout){
			foreach($tryout['Division'] as $division){
				$divisions[] = $division['id'];
			}
		}
		
		return $divisions;
	}
}
