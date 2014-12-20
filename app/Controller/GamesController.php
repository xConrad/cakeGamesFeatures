<?php
App::uses('AppController', 'Controller');
/**
 * Games Controller
 *
 * @property Game $Game
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GamesController extends AppController {

/**
 * Components
 *
 * @var array
 */
 	public $helpers = array('Js');
	public $components = array('Paginator', 'Session','RequestHandler');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Game->recursive = 0;
		$this->set('games', $this->paginate());
	

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Game->exists($id)) {
			throw new NotFoundException(__('Invalid game'));
		}
		$options = array('conditions' => array('Game.' . $this->Game->primaryKey => $id));
		$this->set('game', $this->Game->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		 if ($this->request->is('ajax')) {
        $term = $this->request->query('term');
        $gameNames = $this->Game->getGameGameNames($term);
        $this->set(compact('gameNames'));
        $this->set('_serialize', 'gameNames');
		
		}
		if ($this->request->is('post')) {
			$this->Game->create();
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('The game has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game could not be saved. Please, try again.'), 'flash/error');
			}
		}
		
		$creators = $this->Game->Creator->find('list');
		
		$features = $this->Game->Feature->find('list');
		$users = $this->Game->User->find('list');
		$this->set(compact('creators','features', 'users'));
	}
	
		public function discussionadd() {
		$this->loadModel('Comment');
		if ($this->request->is('post')) {
			$this->Game->create();
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('The game has been saved'), 'flash/success');
				return $this->redirect(array('action' => 'discussion'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$creators = $this->Game->Creator->find('list');
		$comments = $this->Game->Comment->find('list');
		$games = $this->Game->find('list');
		$this->set(compact('creators','games','comments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	
	

		 if ($this->request->is('ajax')) {
        $term = $this->request->query('term');
        $gameNames = $this->Game->getGameGameNames($term);
        $this->set(compact('gameNames'));
        $this->set('_serialize', 'gameNames');
		
		}

        $this->Game->id = $id;
		if (!$this->Game->exists($id)) {
			throw new NotFoundException(__('Invalid game'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('The game has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Game.' . $this->Game->primaryKey => $id));
			$this->request->data = $this->Game->find('first', $options);
		}
		$creators = $this->Game->Creator->find('list');
		$features = $this->Game->Feature->find('list');
		$users = $this->Game->User->find('list');
		$this->set(compact('creators','features', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Game->id = $id;
		if (!$this->Game->exists()) {
			throw new NotFoundException(__('Invalid game'));
		}
		if ($this->Game->delete()) {
			$this->Session->setFlash(__('Game deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Game was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	public function discussion() {
        $this->loadModel('Creator');
		$this->loadModel('Comment');
		//$this->loadModel('Game');
        $creators = $this->Game->Creator->find('list');
		$comments = $this->Game->Comment->find('list');
		$games = $this->Game->find('all');
        $this->set(compact('games',$this->paginate()));
		
    }
	
		public function getByCreator() {
		$creator_id = $this->request->data['Game']['creator_id'];
		
		//$creator_id = 2;
		
		$games= $this->Game->find('list', array(
		'conditions' => array('Game.creator_id' => $creator_id),
		'recursive' => -1
		));
 
		$this->set('games',$games);
		$this->layout = 'ajax';
	}
}
