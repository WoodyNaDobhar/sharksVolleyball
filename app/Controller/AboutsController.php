<?php
App::uses('AppController', 'Controller');
/**
 * Abouts Controller
 *
 * @property About $About
 * @property PaginatorComponent $Paginator
 */
class AboutsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

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
		
		//there's only one home, select the first
		$homes = $this->About->find('first');
		
		//if it's empty, add one
		if(count($homes) < 1){
			return $this->redirect(array('action' => 'add'));
		}
		
		//get it
		$id = $homes['About']['id'];
		$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
		$this->set('about', $this->About->find('first', $options));
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
			$this->About->create();
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('The about has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about could not be saved. Please, try again.'));
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
		
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Invalid about'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('The about has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
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
		
		$this->About->id = $id;
		if (!$this->About->exists()) {
			throw new NotFoundException(__('Invalid about'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->About->delete()) {
			$this->Session->setFlash(__('The about has been deleted.'));
		} else {
			$this->Session->setFlash(__('The about could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
