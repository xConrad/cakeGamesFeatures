<?php
App::uses('AppController', 'Controller');
/**
 * Creators Controller
 *
 * @property Creator $Creator
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CreatorsController extends AppController {

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
		$this->Creator->recursive = 0;
		$this->set('creators', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Creator->exists($id)) {
			throw new NotFoundException(__('Invalid creator'));
		}
		$options = array('conditions' => array('Creator.' . $this->Creator->primaryKey => $id));
		$this->set('creator', $this->Creator->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Creator->create();
			if ($this->Creator->save($this->request->data)) {
				$this->Session->setFlash(__('The creator has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The creator could not be saved. Please, try again.'), 'flash/error');
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
        $this->Creator->id = $id;
		if (!$this->Creator->exists($id)) {
			throw new NotFoundException(__('Invalid creator'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Creator->save($this->request->data)) {
				$this->Session->setFlash(__('The creator has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The creator could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Creator.' . $this->Creator->primaryKey => $id));
			$this->request->data = $this->Creator->find('first', $options);
		}
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
		$this->Creator->id = $id;
		if (!$this->Creator->exists()) {
			throw new NotFoundException(__('Invalid creator'));
		}
		if ($this->Creator->delete()) {
			$this->Session->setFlash(__('Creator deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Creator was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
