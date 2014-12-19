<?php
App::uses('AppController', 'Controller');
/**
 * GameFeatures Controller
 *
 * @property GameFeature $GameFeature
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GameFeaturesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GameFeature->recursive = 0;
		$this->set('gameFeatures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GameFeature->exists($id)) {
			throw new NotFoundException(__('Invalid game feature'));
		}
		$options = array('conditions' => array('GameFeature.' . $this->GameFeature->primaryKey => $id));
		$this->set('gameFeature', $this->GameFeature->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GameFeature->create();
			if ($this->GameFeature->save($this->request->data)) {
				$this->Session->setFlash(__('The game feature has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game feature could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$games = $this->GameFeature->Game->find('list');
		$features = $this->GameFeature->Feature->find('list');
		$this->set(compact('games', 'features'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->GameFeature->id = $id;
		if (!$this->GameFeature->exists($id)) {
			throw new NotFoundException(__('Invalid game feature'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GameFeature->save($this->request->data)) {
				$this->Session->setFlash(__('The game feature has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game feature could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('GameFeature.' . $this->GameFeature->primaryKey => $id));
			$this->request->data = $this->GameFeature->find('first', $options);
		}
		$games = $this->GameFeature->Game->find('list');
		$features = $this->GameFeature->Feature->find('list');
		$this->set(compact('games', 'features'));
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
		$this->GameFeature->id = $id;
		if (!$this->GameFeature->exists()) {
			throw new NotFoundException(__('Invalid game feature'));
		}
		if ($this->GameFeature->delete()) {
			$this->Session->setFlash(__('Game feature deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Game feature was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
