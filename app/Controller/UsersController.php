<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	
	var $components = array('Auth');
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
    	$this->adminBounce();
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
        	if($this->request->data['User']['password'] == $this->request->data['User']['passwordConfirm']){
	            $this->User->create();
	            if ($this->User->save($this->request->data)) {
	                $this->Session->setFlash(__('The user has been saved'));
	                return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
	            }
	            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        	}else{
	            $this->Session->setFlash(__('The passwords provided do not match. Please, try again.'));
        	}
        }
    }

    public function edit($id = null) {
    	$this->adminBounce();
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function account($id = null) {
    	
    	//make sure the user logged in is the given user
    	if($id != $this->Session->read('Auth.User.id')){
    		$this->Session->setFlash(__('You do not have access to the requested page.'));
    		return $this->redirect(array('action' => 'index'));
    	}
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
    	$this->adminBounce();
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
	
	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}
	
	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}
}
