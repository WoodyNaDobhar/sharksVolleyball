<?php
App::uses('AppController', 'Controller');
/**
 * Homes Controller
 *
 * @property Home $Home
 * @property PaginatorComponent $Paginator
 */
class HomesController extends AppController {

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
	public function view() {
		
		//security
		$this->adminBounce();
		
		//there's only one home, select the first
		$homes = $this->Home->find('first');
		
		//if it's empty, add one
		if(count($homes) < 1){
			return $this->redirect(array('action' => 'add'));
		}
		
		//get it
		$id = $homes['Home']['id'];
		$options = array('conditions' => array('Home.' . $this->Home->primaryKey => $id));
		$this->set('home', $this->Home->find('first', $options));
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
			$this->Home->create();
			if ($this->Home->save($this->request->data)) {
				$this->Session->setFlash(__('The home has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The home could not be saved. Please, try again.'));
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
		
		if (!$this->Home->exists($id)) {
			throw new NotFoundException(__('Invalid home'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Home->save($this->request->data)) {
				$this->Session->setFlash(__('The home has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The home could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Home.' . $this->Home->primaryKey => $id));
			$this->request->data = $this->Home->find('first', $options);
		}
	}
}