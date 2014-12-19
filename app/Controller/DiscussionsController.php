<?php
App::uses('AppController', 'Controller');
/**
 * Discussions Controller
 *
 * @property Discussion $Discussion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DiscussionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $helpers = array('Js');
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Discussion->recursive = 0;
		$this->set('discussions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Discussion->exists($id)) {
			throw new NotFoundException(__('Invalid discussion'));
		}
		$options = array('conditions' => array('Discussion.' . $this->Discussion->primaryKey => $id));
		$this->set('discussion', $this->Discussion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Discussion->create();
			if ($this->Discussion->save($this->request->data)) {
				$this->Session->setFlash(__('The discussion has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$creators = $this->Discussion->Game->Creator->find('list');
		$games = $this->Discussion->Game->find('list');
		$this->set(compact('games','creators'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Discussion->id = $id;
		if (!$this->Discussion->exists($id)) {
			throw new NotFoundException(__('Invalid discussion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Discussion->save($this->request->data)) {
				$this->Session->setFlash(__('The discussion has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Discussion.' . $this->Discussion->primaryKey => $id));
			$this->request->data = $this->Discussion->find('first', $options);
		}
		$games = $this->Discussion->Game->find('list');
		$this->set(compact('games'));
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
		$this->Discussion->id = $id;
		if (!$this->Discussion->exists()) {
			throw new NotFoundException(__('Invalid discussion'));
		}
		if ($this->Discussion->delete()) {
			$this->Session->setFlash(__('Discussion deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Discussion was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
