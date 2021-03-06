<?php
App::uses('AppController', 'Controller');
/**
 * Scrollers Controller
 *
 * @property Scroller $Scroller
 */
class ScrollersController extends AppController {
	
	public $components = array('ImageUploader');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//security
		$this->adminBounce();
		
		$this->Scroller->recursive = 0;
		$this->set('scrollers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		//security
		$this->adminBounce();
		
		$this->Scroller->id = $id;
		if (!$this->Scroller->exists()) {
			throw new NotFoundException(__('Invalid scroller'));
		}
		$this->set('scroller', $this->Scroller->read(null, $id));
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
			if($this->request->data['Scroller']['image']['name']){

				//update the file name
				$this->request->data['Scroller']['image']['name'] = rand(100000, 999999).$this->request->data['Scroller']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Scroller']['image'], FILE_SCROLL);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Scroller']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The scroller could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Scroller']['image']);
			}
			
			//save it
			$this->Scroller->create();
			if ($this->Scroller->save($this->request->data)) {
				$this->Session->setFlash(__('The scroller has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scroller could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		//security
		$this->adminBounce();
		
		$this->Scroller->id = $id;
		if (!$this->Scroller->exists()) {
			throw new NotFoundException(__('Invalid scroller'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//if there's an image uploaded
			if($this->request->data['Scroller']['image']['name']){

				//update the file name
				$this->request->data['Scroller']['image']['name'] = rand(100000, 999999).$this->request->data['Scroller']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Scroller']['image'], FILE_SCROLL);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Scroller']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The scroller could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Scroller']['image']);
			}
			if ($this->Scroller->save($this->request->data)) {
				$this->Session->setFlash(__('The scroller has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scroller could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Scroller->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		//security
		$this->adminBounce();
		
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Scroller->id = $id;
		if (!$this->Scroller->exists()) {
			throw new NotFoundException(__('Invalid scroller'));
		}
		if ($this->Scroller->delete()) {
			$this->Session->setFlash(__('Scroller deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Scroller was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
