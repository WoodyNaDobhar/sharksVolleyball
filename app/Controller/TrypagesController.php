<?php
App::uses('AppController', 'Controller');
/**
 * Trypages Controller
 *
 * @property Trypage $Trypage
 * @property PaginatorComponent $Paginator
 */
class TrypagesController extends AppController {

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
		
		//there's only one tryout, select the first
		$tryouts = $this->Trypage->find('first');
		
		//if it's empty, add one
		if(count($tryouts) < 1){
			return $this->redirect(array('action' => 'add'));
		}
		
		//get it
		$id = $tryouts['Trypage']['id'];
		$options = array('conditions' => array('Trypage.' . $this->Trypage->primaryKey => $id));
		$this->set('tryout', $this->Trypage->find('first', $options));
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
			$this->Trypage->create();
			if ($this->Trypage->save($this->request->data)) {
				$this->Session->setFlash(__('The tryout has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The tryout could not be saved. Please, try again.'));
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
		
		if (!$this->Trypage->exists($id)) {
			throw new NotFoundException(__('Invalid tryout'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Trypage->save($this->request->data)) {
				$this->Session->setFlash(__('The tryout has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The tryout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Trypage.' . $this->Trypage->primaryKey => $id));
			$this->request->data = $this->Trypage->find('first', $options);
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
		
		$this->Trypage->id = $id;
		if (!$this->Trypage->exists()) {
			throw new NotFoundException(__('Invalid tryout'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Trypage->delete()) {
			$this->Session->setFlash(__('The tryout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tryout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
