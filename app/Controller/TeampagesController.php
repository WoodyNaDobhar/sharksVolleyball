<?php
App::uses('AppController', 'Controller');
/**
 * Teampages Controller
 *
 * @property Teampage $Teampage
 * @property PaginatorComponent $Paginator
 */
class TeampagesController extends AppController {

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
		
		//there's only one teampage, select the first
		$teampages = $this->Teampage->find('first');
		
		//if it's empty, add one
		if(count($teampages) < 1){
			return $this->redirect(array('action' => 'add'));
		}
		
		//get it
		$id = $teampages['Teampage']['id'];
		$options = array('conditions' => array('Teampage.' . $this->Teampage->primaryKey => $id));
		$this->set('teampage', $this->Teampage->find('first', $options));
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
			$this->Teampage->create();
			if ($this->Teampage->save($this->request->data)) {
				$this->Session->setFlash(__('The teampage has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The teampage could not be saved. Please, try again.'));
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
		
		if (!$this->Teampage->exists($id)) {
			throw new NotFoundException(__('Invalid teampage'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Teampage->save($this->request->data)) {
				$this->Session->setFlash(__('The teampage has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The teampage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Teampage.' . $this->Teampage->primaryKey => $id));
			$this->request->data = $this->Teampage->find('first', $options);
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
		
		$this->Teampage->id = $id;
		if (!$this->Teampage->exists()) {
			throw new NotFoundException(__('Invalid teampage'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Teampage->delete()) {
			$this->Session->setFlash(__('The teampage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The teampage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
