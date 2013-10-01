<?php
App::uses('AppController', 'Controller');
/**
 * Tryouts Controller
 *
 * @property Tryout $Tryout
 * @property PaginatorComponent $Paginator
 */
class TryoutsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		//security
		$this->adminBounce();
		
		$this->Tryout->recursive = 0;
		$this->set('tryouts', $this->Paginator->paginate());
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
		
		if (!$this->Tryout->exists($id)) {
			throw new NotFoundException(__('Invalid tryout'));
		}
		$options = array('conditions' => array('Tryout.' . $this->Tryout->primaryKey => $id));
		$this->set('tryout', $this->Tryout->find('first', $options));
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
			$this->Tryout->create();
			if ($this->Tryout->save($this->request->data)) {
				$this->Session->setFlash(__('The tryout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tryout could not be saved. Please, try again.'));
			}
		}
		$divisions = $this->Tryout->Division->find('list');
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
		
		if (!$this->Tryout->exists($id)) {
			throw new NotFoundException(__('Invalid tryout'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tryout->save($this->request->data)) {
				$this->Session->setFlash(__('The tryout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tryout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tryout.' . $this->Tryout->primaryKey => $id));
			$this->request->data = $this->Tryout->find('first', $options);
		}
		$divisions = $this->Tryout->Division->find('list');
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
		$this->Tryout->id = $id;
		if (!$this->Tryout->exists()) {
			throw new NotFoundException(__('Invalid tryout'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tryout->delete()) {
			$this->Session->setFlash(__('The tryout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tryout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
