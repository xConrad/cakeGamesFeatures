<?php
App::uses('AppController', 'Controller');
/**
 * Features Controller
 *
 * @property Feature $Feature
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FeaturesController extends AppController {

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
		$this->Feature->recursive = 0;
		$this->set('features', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Feature->exists($id)) {
			throw new NotFoundException(__('Invalid feature'));
		}
		$options = array('conditions' => array('Feature.' . $this->Feature->primaryKey => $id));
		$this->set('feature', $this->Feature->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Feature->create();
			if ($this->Feature->save($this->request->data)) {
				$this->Session->setFlash(__('The feature has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature could not be saved. Please, try again.'), 'flash/error');
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
        $this->Feature->id = $id;
		if (!$this->Feature->exists($id)) {
			throw new NotFoundException(__('Invalid feature'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Feature->save($this->request->data)) {
				$this->Session->setFlash(__('The feature has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Feature.' . $this->Feature->primaryKey => $id));
			$this->request->data = $this->Feature->find('first', $options);
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
		$this->Feature->id = $id;
		if (!$this->Feature->exists()) {
			throw new NotFoundException(__('Invalid feature'));
		}
		if ($this->Feature->delete()) {
			$this->Session->setFlash(__('Feature deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Feature was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
