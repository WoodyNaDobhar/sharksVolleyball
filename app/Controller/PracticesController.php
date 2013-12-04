<?php
App::uses('AppController', 'Controller');
/**
 * Practices Controller
 *
 * @property Practice $Practice
 * @property PaginatorComponent $Paginator
 */
class PracticesController extends AppController {

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
		
		$this->Practice->recursive = 0;
		$this->set('practices', $this->Paginator->paginate());
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
		
		if (!$this->Practice->exists($id)) {
			throw new NotFoundException(__('Invalid practice'));
		}
		$options = array('conditions' => array('Practice.' . $this->Practice->primaryKey => $id));
		$this->set('practice', $this->Practice->find('first', $options));
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
			$this->Practice->create();
			if ($this->Practice->save($this->request->data)) {
				$this->Session->setFlash(__('The practice has been saved.  Change the values below to add another.'));
			} else {
				$this->Session->setFlash(__('The practice could not be saved. Please, try again.'));
			}
		}
		
		$defaults = isset($this->request->data['Practice'])?$this->request->data['Practice']:null;
		$teams = $this->Practice->Team->find('list');
		$this->set(compact('teams', 'defaults'));
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
		
		if (!$this->Practice->exists($id)) {
			throw new NotFoundException(__('Invalid practice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Practice->save($this->request->data)) {
				$this->Session->setFlash(__('The practice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The practice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Practice.' . $this->Practice->primaryKey => $id));
			$this->request->data = $this->Practice->find('first', $options);
		}
		$teams = $this->Practice->Team->find('list');
		$this->set(compact('teams'));
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
		
		$this->Practice->id = $id;
		if (!$this->Practice->exists()) {
			throw new NotFoundException(__('Invalid practice'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Practice->delete()) {
			$this->Session->setFlash(__('The practice has been deleted.'));
		} else {
			$this->Session->setFlash(__('The practice could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
