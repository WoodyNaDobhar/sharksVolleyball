<?php
App::uses('AppController', 'Controller');
/**
 * Players Controller
 *
 * @property Player $Player
 * @property PaginatorComponent $Paginator
 */
class PlayersController extends AppController{

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
	public function index(){
		
		//security
		$this->adminBounce();
		
		$this->Player->recursive = 0;
		$this->set('players', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null){
		
		//security
		$this->adminBounce();
		
		if (!$this->Player->exists($id)){
			throw new NotFoundException(__('Invalid player'));
		}
		$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
		$this->set('player', $this->Player->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add(){
		
		//security
		$this->adminBounce();
		
		if($this->request->is('post')){
			$this->Player->create();
			if ($this->Player->save($this->request->data)){
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		}
		$states = $this->Player->State->find('list');
		$teams = $this->Player->Team->find('list');
		$divisions = $this->Player->Division->find('list');
		$tryouts = $this->Player->Tryout->find('list');
		$positions = $this->Player->Position->find('list');
		array_unshift($positions, array(0 => "Any/Unsure"));
		$this->set(compact('states', 'teams', 'divisions', 'tryouts', 'positions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null){
		
		//security
		$this->adminBounce();
		
		if (!$this->Player->exists($id)){
			throw new NotFoundException(__('Invalid player'));
		}
		if ($this->request->is('post') || $this->request->is('put')){
			if ($this->Player->save($this->request->data)){
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		}else{
			$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
			$this->request->data = $this->Player->find('first', $options);
		}
		
		//regular stuff
		$states = $this->Player->State->find('list');
		$teams = $this->Player->Team->find('list');
		$divisions = $this->Player->Division->find('list');
		$tryouts = $this->Player->Tryout->find('list');
		$positions = $this->Player->Position->find('list');
		array_unshift($positions, array(0 => "Any/Unsure"));
		$this->set(compact('states', 'teams', 'divisions', 'positions', 'tryouts'));
		
		//toggle state handling
		$player = $this->Player->findById($id);
		$playStyle = ($player['Player']['play_last']==1)?'':'display: none';
		$tryStyle = ($player['Player']['try_other']==1)?'':'display: none';
		$this->set(compact('playStyle', 'tryStyle'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null){
		
		//security
		$this->adminBounce();
		
		$this->Player->id = $id;
		if (!$this->Player->exists()){
			throw new NotFoundException(__('Invalid player'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Player->delete()){
			$this->Session->setFlash(__('The player has been deleted.'));
		}else{
			$this->Session->setFlash(__('The player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
