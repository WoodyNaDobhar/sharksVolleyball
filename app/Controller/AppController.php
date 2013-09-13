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
		
		//uncomment this to stop double-login
// 		if(isset($iniSet) && $iniSet && env('HTTPS')){
// 			if(!defined('UNSECURE_COOKIE') || (UNSECURE_COOKIE != true)){
// 				ini_set('session.cookie_secure', 1);
// 			}
// 		}
		
		if(in_array($this->name, array('Pages'))) {
			$this->Auth->allow(array('display'));
		}
		$this->Auth->allow('index', 'view');
		
		//security
		$isAdmin = ($this->Session->read('Auth.User.role') == ROLE_ADMIN);
		$isUser = ($this->Session->read('Auth.User.role') == ROLE_USER);
		$this->set('isAdmin', $isAdmin);
		$this->set('isUser', $isUser);
		
		//get our various social mediums
		$this->loadModel('Social');
		$socials = $this->Social->find('all');
		$this->set('socials', $socials);
		
		//get the flickr feed
		foreach($socials as $key => $social){
			if($social['Social']['service'] == 'flickr'){
				$flickrId = $key;
				continue;
			}
		}
		$this->set('flickrId', $flickrId);
		$ch = curl_init ("http://ycpi.api.flickr.com/services/feeds/photos_public.gne?id=".$socials[$flickrId]['Social']['service_identity']."&format=json");
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		$flickrFeedJson = curl_exec ($ch);
		$flickrFeedJson = str_replace( 'jsonFlickrFeed(', '', $flickrFeedJson);
		$flickrFeedJson = substr($flickrFeedJson, 0, strlen($flickrFeedJson) - 1);
		$flickrFeed = json_decode($flickrFeedJson, TRUE);
		$this->set('flickrFeed', $flickrFeed);
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
