<?php
App::uses('AppController', 'Controller');
/**
 * Divisions Controller
 *
 * @property Division $Division
 * @property PaginatorComponent $Paginator
 */
class DivisionsController extends AppController {

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
		
		$this->Division->recursive = 0;
		$this->set('divisions', $this->Paginator->paginate());
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
		
		if (!$this->Division->exists($id)) {
			throw new NotFoundException(__('Invalid division'));
		}
		$options = array('conditions' => array('Division.' . $this->Division->primaryKey => $id));
		$this->set('division', $this->Division->find('first', $options));
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
			$this->Division->create();
			if ($this->Division->save($this->request->data)) {
				$this->Session->setFlash(__('The division has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The division could not be saved. Please, try again.'));
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
		
		if (!$this->Division->exists($id)) {
			throw new NotFoundException(__('Invalid division'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Division->save($this->request->data)) {
				$this->Session->setFlash(__('The division has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The division could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Division.' . $this->Division->primaryKey => $id));
			$this->request->data = $this->Division->find('first', $options);
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
		
		$this->Division->id = $id;
		if (!$this->Division->exists()) {
			throw new NotFoundException(__('Invalid division'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Division->delete()) {
			$this->Session->setFlash(__('The division has been deleted.'));
		} else {
			$this->Session->setFlash(__('The division could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
