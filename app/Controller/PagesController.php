<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {
	
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		
		//security
		if($page == 'admin' && !($this->Auth->user())){
			return $this->redirect(array('controller' => 'Users', 'action' => 'login'));
		}
		
		//extra data by page
		if($page == 'home'){
			
			//scrollers
			$this->loadModel('Scroller');
			$scrollers = $this->Scroller->find('all');
			$this->set('scrollers', $scrollers);
			
			//testimonials
			$this->loadModel('Testimonial');
			$testimonials = $this->Testimonial->find('all');
			$this->set('testimonials', $testimonials);
			
			//everything else ;)
			$this->loadModel('Home');
			$home = $this->Home->find('first');
			$this->set('home', $home);
		}elseif($page == 'about-story'){
			
			//employees
			$this->loadModel('Employee');
			$employees = $this->Employee->find('all');
			$this->set('employees', $employees);
			
			//testimonials
			$this->loadModel('Testimonial');
			$testimonials = $this->Testimonial->find('all');
			$this->set('testimonials', $testimonials);
			
			//everything else ;)
			$this->loadModel('About');
			$about = $this->About->find('first');
			$this->set('about', $about);
		}elseif($page == 'about-club'){
			
			//testimonials
			$this->loadModel('Testimonial');
			$testimonials = $this->Testimonial->find('all');
			$this->set('testimonials', $testimonials);
			
			//everything else ;)
			$this->loadModel('Club');
			$club = $this->Club->find('first');
			$this->set('club', $club);
		}elseif($page == 'tryout'){
			
			//tryout
			$this->loadModel('Tryout');
			$tryout = $this->Tryout->find('first');
			$this->set('tryout', $tryout);
			
			//everything else ;)
			$this->loadModel('State');
			$states = $this->State->find('list');
			$this->loadModel('Team');
			$teams = $this->Team->find('list');
			$this->loadModel('Position');
			$positions = $this->Position->find('list');
			array_unshift($positions, array(0 => "Any/Unsure"));
			$this->set(compact('states', 'teams', 'positions'));
		}

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
