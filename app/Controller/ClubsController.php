<?php
App::uses('AppController', 'Controller');
/**
 * Clubs Controller
 *
 * @property Club $Club
 * @property PaginatorComponent $Paginator
 */
class ClubsController extends AppController {

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
		$club = $this->Club->find('first');
		
		//if it's empty, add one
		if(count($club) < 1){
			return $this->redirect(array('action' => 'add'));
		}
		
		//get it
		$id = $club['Club']['id'];
		$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
		$this->set('club', $this->Club->find('first', $options));
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
			$this->Club->create();
			if ($this->Club->save($this->request->data)) {
				$this->Session->setFlash(__('The club has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
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
		
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Invalid club'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Club->save($this->request->data)) {
				$this->Session->setFlash(__('The club has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
			$this->request->data = $this->Club->find('first', $options);
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
		
		$this->Club->id = $id;
		if (!$this->Club->exists()) {
			throw new NotFoundException(__('Invalid club'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Club->delete()) {
			$this->Session->setFlash(__('The club has been deleted.'));
		} else {
			$this->Session->setFlash(__('The club could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
