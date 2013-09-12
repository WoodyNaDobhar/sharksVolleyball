<?php
App::uses('AppController', 'Controller');
/**
 * Socials Controller
 *
 * @property Social $Social
 * @property PaginatorComponent $Paginator
 */
class SocialsController extends AppController {

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
		$this->Social->recursive = 0;
		$this->set('socials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Social->exists($id)) {
			throw new NotFoundException(__('Invalid social'));
		}
		$options = array('conditions' => array('Social.' . $this->Social->primaryKey => $id));
		$this->set('social', $this->Social->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Social->create();
			if ($this->Social->save($this->request->data)) {
				$this->Session->setFlash(__('The social has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The social could not be saved. Please, try again.'));
			}
		}
		$services = $this->getFreeServices();
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Social->exists($id)) {
			throw new NotFoundException(__('Invalid social'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Social->save($this->request->data)) {
				$this->Session->setFlash(__('The social has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The social could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Social.' . $this->Social->primaryKey => $id));
			$this->request->data = $this->Social->find('first', $options);
		}
		$services = $this->getFreeServices();
		$this->set(compact('services'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Social->id = $id;
		if (!$this->Social->exists()) {
			throw new NotFoundException(__('Invalid social'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Social->delete()) {
			$this->Session->setFlash(__('The social has been deleted.'));
		} else {
			$this->Session->setFlash(__('The social could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	/**
	 * 
	 * Get all the social services not currently in use
	 * @return multitype:
	 */
	function getFreeServices(){
		
		//the whole list
		$base = Configure::read('socials');
		
		//what we're already using
		$usedPile = $this->Social->find('all');
		$used = Set::extract('/Social/service', $usedPile);
		
		$free = array_diff($base, $used);
		
		return $free;
	}
}
