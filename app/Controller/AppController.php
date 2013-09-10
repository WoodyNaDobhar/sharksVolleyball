<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	 Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link		  http://cakephp.org CakePHP(tm) Project
 * @package	   app.Controller
 * @since		 CakePHP(tm) v 0.2.9
 * @license	   http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
			'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
		if(in_array($this->name, array('Pages'))) {
			$this->Auth->allow(array('display'));
		}
		$this->Auth->allow('index', 'view');
		
		//some defaults
		$isAdmin = ($this->Session->read('Auth.User.role') == ROLE_ADMIN);
		$isUser = ($this->Session->read('Auth.User.role') == ROLE_USER);
	}

	//toss anybody who tries to get in the admin area without creds.
	function adminBounce(){
		if($this->Session->read('Auth.User.role') != ROLE_ADMIN){
			$backtrace = debug_backtrace();
			$origin = $backtrace[1]['class']."->".$backtrace[1]['function'];
			$this->log('BOUNCED from ADMIN function: '.$origin, LOG_DEBUG);
			$this->redirect("/");
			return true;
		}
		return false;
	}
}
