<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework(http://cakephp.org)
 * Copyright(c) Cake Software Foundation, Inc.(http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright(c) Cake Software Foundation, Inc.(http://cakefoundation.org)
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
class PagesController extends AppController{
	
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
	public function display(){
		$path = func_get_args();

		$count = count($path);
		if(!$count){
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if(!empty($path[0])){
			$page = $path[0];
		}
		if(!empty($path[1])){
			$subpage = $path[1];
		}
		if(!empty($path[$count - 1])){
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
			
			//setup
			$show = 'form';
			$this->loadModel('Tryout');
			$this->loadModel('Trypage');
			$this->loadModel('State');
			$this->loadModel('Division');
			$this->loadModel('Team');
			$this->loadModel('Position');
			$this->loadModel('Player');
			
			//trypage
			$trypage = $this->Trypage->find('first');
			$this->set('trypage', $trypage);
			
			//if we're in a tryout phase and we're not here for results
			if($this->Tryout->inPhase()){
				
				//post paid processing
				if(isset($this->params['url']['st']) && $this->params['url']['st'] == 'Completed'){
					
					//setup
					$req = 'cmd=_notify-synch';
					$tx_token = $this->params['url']['tx'];
					$auth_token = PAYPALID;
					$req .= "&tx=$tx_token&at=$auth_token";
					
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, "https://".PAYPALHOST."/cgi-bin/webscr");
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
					//the below is for the test server.  Comment out the following two when used. 
					//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
					curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: ".PAYPALHOST));
					$res = curl_exec($ch);
					
					if(!$res){
						//error
						$this->Session->setFlash(__(curl_error($ch)));
					}else{
						 // parse the data
						$lines = explode("\n", $res);
						$keyarray = array();
						if(strcmp($lines[0], "SUCCESS") == 0){
							for($i=1; $i<count($lines);$i++){
								if(!empty($lines[$i])){
									list($key,$val) = explode("=", $lines[$i]);
									$keyarray[urldecode($key)] = urldecode($val);
								}
							}
							
							//update the player
							if(is_numeric($keyarray['option_selection1_1'])){
								
								//check the id
								$player = $this->Player->find('first', array(
									'conditions'	=> array(
										'id'	=> $keyarray['option_selection1_1']
									),
									'recursive'		=> '-1',
								));
								
								if(!empty($player)){
									$this->Player->id = $keyarray['option_selection1_1'];
									$this->Player->saveField('paid', 1);
									$this->Session->setFlash(__('Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href="http://'.PAYPALHOST.'/us" target="_blank">www.paypal.com/us</a> to view details of this transaction.'));
								}else{
									$this->Session->setFlash(__('Something has gone wrong (I blame PayPal), and your payment hasn\'t been applied to your registration.  Please contact us with your name and the email account you signed up with and we\'ll get this straitened out.'));
								}
							}
						}else if(strcmp($lines[0], "FAIL") == 0){
							// log for manual investigation
							$this->Session->setFlash(__('Something has gone wrong with the payment.  Please contact us to clear up the confusion and get you back on track.'));
						}
					}
					curl_close($ch);
					$show = 'thanks';
				}
				
				//post signup processing
				if($this->request->is('post')){
					
					//work out by date and division what tryout they're in and add it to the player
					$tryout_id = $this->Tryout->getByDivision($this->request->data['Player']['division_id']);
					$this->request->data['Player']['tryout_id'] = $tryout_id;
					
					//make it
					$this->Player->create();
						if($this->Player->save($this->request->data)){
							$this->set('player_id', $this->Player->getLastInsertID());
							$this->Session->setFlash(__('The player has been saved.  Now to settle up the bill.'));
							$show = 'pay';
						}else{
							$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
					}
				}
				
				//everything else ;)
				$states = $this->State->find('list');
				$positions = $this->Position->find('list');
				array_unshift($positions, array(0 => "Any/Unsure"));
				
				//divisions available are based on the current tryout 
				$divisions = $this->Tryout->getPhaseDivisions();
				
				$this->set(compact('states', 'teams', 'divisions', 'positions', 'show'));
			
			//outside of the season, we show the team results, as it's known
			}else{
				$this->redirect('/results');
			}
		}elseif($page == 'results'){
			
			//setup
			$this->loadModel('Division');
			$this->loadModel('Trypage');
			$this->loadModel('Tryout');
			
			//trypage
			$trypage = $this->Trypage->find('first');
			$this->set('trypage', $trypage);
			
			//get the relevant divisions
			$division_ids = $this->Tryout->getRecentDivisions();
			
			//players, organized by team and division
			$divisions = $this->Division->find('all', array(
				'contain'	=> array(
					'Team'	=> array(
						'Player'	=> array(
							'conditions' => array(
								'Player.paid' => '1',
								'Player.waiver' => '1',
								'Player.approved' => '1',
							),
							'fields'	=> array(
								'number',
								'first_name',
								'last_name',
								'school'
							)
						)
					),
				),
				'conditions'	=> array(
					'Division.id'	=> $division_ids
				),
			));
			
			$this->set(compact('divisions'));
		}

		try{
			$this->render(implode('/', $path));
		} catch(MissingViewException $e){
			if(Configure::read('debug')){
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
