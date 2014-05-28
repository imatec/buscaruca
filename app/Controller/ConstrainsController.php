<?php
App::uses('AppController', 'Controller');
/**
 * Constrains Controller
 *
 * @property Constrain $Constrain
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConstrainsController extends AppController {

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
		$this->Constrain->recursive = 0;
		$this->set('constrains', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Constrain->exists($id)) {
			throw new NotFoundException(__('Invalid constrain'));
		}
		$options = array('conditions' => array('Constrain.' . $this->Constrain->primaryKey => $id));
		$this->set('constrain', $this->Constrain->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Constrain->create();
			if ($this->Constrain->save($this->request->data)) {
				$this->Session->setFlash(__('The constrain has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The constrain could not be saved. Please, try again.'));
			}
		}
		$searches = $this->Constrain->Search->find('list');
		$this->set(compact('searches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Constrain->exists($id)) {
			throw new NotFoundException(__('Invalid constrain'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Constrain->save($this->request->data)) {
				$this->Session->setFlash(__('The constrain has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The constrain could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Constrain.' . $this->Constrain->primaryKey => $id));
			$this->request->data = $this->Constrain->find('first', $options);
		}
		$searches = $this->Constrain->Search->find('list');
		$this->set(compact('searches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Constrain->id = $id;
		if (!$this->Constrain->exists()) {
			throw new NotFoundException(__('Invalid constrain'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Constrain->delete()) {
			$this->Session->setFlash(__('The constrain has been deleted.'));
		} else {
			$this->Session->setFlash(__('The constrain could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
