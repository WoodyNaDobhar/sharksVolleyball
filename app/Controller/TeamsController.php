<?php
App::uses('AppController', 'Controller');
/**
 * Teams Controller
 *
 * @property Team $Team
 * @property PaginatorComponent $Paginator
 */
class TeamsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'ImageUploader');
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('byYear', 'byDivision');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//security
		$this->adminBounce();
		
		$this->Team->recursive = 0;
		$this->set('teams', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		//security
		$this->adminBounce();
		
		if (!$this->Team->exists($id)) {
			throw new NotFoundException(__('Invalid team'));
		}
		$options = array('conditions' => array('Team.' . $this->Team->primaryKey => $id));
		$this->set('team', $this->Team->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		//security
		$this->adminBounce();
		
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['Team']['photo']['name']){

				//update the file name
				$this->request->data['Team']['photo']['name'] = rand(100000, 999999).$this->request->data['Team']['photo']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Team']['photo'], FILE_TEAM);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Team']['photo'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The team could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Team']['photo']);
			}
			$this->Team->create();
			if ($this->Team->save($this->request->data)) {
				$this->Session->setFlash(__('The team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The team could not be saved. Please, try again.'));
			}
		}
		$divisions = $this->Team->Division->find('list');
		$this->set(compact('divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		//security
		$this->adminBounce();
		
		if (!$this->Team->exists($id)) {
			throw new NotFoundException(__('Invalid team'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//if there's an image uploaded
			if($this->request->data['Team']['photo']['name']){

				//update the file name
				$this->request->data['Team']['photo']['name'] = rand(100000, 999999).$this->request->data['Team']['photo']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Team']['photo'], FILE_TEAM);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Team']['photo'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The team could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Team']['photo']);
			}
			if ($this->Team->save($this->request->data)) {
				$this->Session->setFlash(__('The team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The team could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Team.' . $this->Team->primaryKey => $id));
			$this->request->data = $this->Team->find('first', $options);
		}
		$divisions = $this->Team->Division->find('list');
		$this->set(compact('divisions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		//security
		$this->adminBounce();
		
		$this->Team->id = $id;
		if (!$this->Team->exists()) {
			throw new NotFoundException(__('Invalid team'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Team->delete()) {
			$this->Session->setFlash(__('The team has been deleted.'));
		} else {
			$this->Session->setFlash(__('The team could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	//list teams by year
	public function byYear($year = null){

		//setup
		$this->loadModel('Division');
		$this->loadModel('Tryout');
		$this->loadModel('Teampage');
			
		//teampage
		$teampage = $this->Teampage->find('first');
		$this->set('teampage', $teampage);
		
		//get divisions
		$division_ids = $this->Tryout->getYearDivisions($year);
		
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
		
		$this->set(compact('divisions', 'year'));
	}
	
	//list teams by division (this year only)
	public function byDivision($division = null){

		//setup
		$this->loadModel('Division');
		$this->loadModel('Tryout');
		$this->loadModel('Teampage');
			
		//teampage
		$teampage = $this->Teampage->find('first');
		$this->set('teampage', $teampage);
		
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
				'Division.name'	=> $division
			),
		));
		
		//practices for the division, grouped by team
		$practicesT = $this->Division->find('first', array(
			'contain'	=> array(
				'Team'	=> array(
					'Practice'
				),
			),
			'conditions'	=> array(
				'Division.name'	=> $division
			),
		));
		$practices = $practicesT['Team'];
		debug($practices);
		die;
		
		$this->set(compact('divisions', 'division', 'practices'));
	}
}
