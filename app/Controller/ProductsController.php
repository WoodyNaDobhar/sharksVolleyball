<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'ImageUploader');
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('listJson');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//security
		$this->adminBounce();
		
		$this->Product->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
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
		
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
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
			if($this->request->data['Product']['img']['name']){
				
				//update the file name
				$this->request->data['Product']['img']['name'] = rand(100000, 999999).$this->request->data['Product']['img']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Product']['img'], FILE_PRO);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Product']['img'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The employee could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Product']['img']);
			}
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
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
		
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//if there's an image uploaded
			if($this->request->data['Product']['img']['name']){
				
				//update the file name
				$this->request->data['Product']['img']['name'] = rand(100000, 999999).$this->request->data['Product']['img']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Product']['img'], FILE_PRO);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Product']['img'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The employee could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Product']['img']);
			}
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
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
		
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('The product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * index method
 *
 * @return void
 */
	public function listJson() {
		
		Configure::write('debug', 0);
		$this->autoRender = false;
		$this->Product->recursive = -1;
		return json_encode($this->Product->find('all'));
	}
}
