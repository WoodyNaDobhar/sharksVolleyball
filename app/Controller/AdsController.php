<?php
App::uses('AppController', 'Controller');
/**
 * Ads Controller
 *
 * @property Ad $Ad
 * @property PaginatorComponent $Paginator
 */
class AdsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'ImageUploader');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//security
		$this->adminBounce();
		
		$this->Ad->recursive = 0;
		$this->set('ads', $this->Paginator->paginate());
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
		
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
		$this->set('ad', $this->Ad->find('first', $options));
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
			if($this->request->data['Ad']['image']['name']){

				//update the file name
				$this->request->data['Ad']['image']['name'] = rand(100000, 999999).$this->request->data['Ad']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Ad']['image'], FILE_ADS);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Ad']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The Ad could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Ad']['image']);
			}
			$this->Ad->create();
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('The ad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		}
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
		
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//if there's an image uploaded
			if($this->request->data['Ad']['image']['name']){

				//update the file name
				$this->request->data['Ad']['image']['name'] = rand(100000, 999999).$this->request->data['Ad']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Ad']['image'], FILE_ADS);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Ad']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The Ad could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Ad']['image']);
			}
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('The ad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
			$this->request->data = $this->Ad->find('first', $options);
		}
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
		
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ad->delete()) {
			$this->Session->setFlash(__('The ad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
