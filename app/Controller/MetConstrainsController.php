<?php
App::uses('AppController', 'Controller');
/**
 * MetConstrains Controller
 *
 * @property MetConstrain $MetConstrain
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MetConstrainsController extends AppController {

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
		$this->MetConstrain->recursive = 0;
		$this->set('metConstrains', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MetConstrain->exists($id)) {
			throw new NotFoundException(__('Invalid met constrain'));
		}
		$options = array('conditions' => array('MetConstrain.' . $this->MetConstrain->primaryKey => $id));
		$this->set('metConstrain', $this->MetConstrain->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MetConstrain->create();
			if ($this->MetConstrain->save($this->request->data)) {
				$this->Session->setFlash(__('The met constrain has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The met constrain could not be saved. Please, try again.'));
			}
		}
		$constrains = $this->MetConstrain->Constrain->find('list');
		$prospects = $this->MetConstrain->Prospect->find('list');
		$this->set(compact('constrains', 'prospects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MetConstrain->exists($id)) {
			throw new NotFoundException(__('Invalid met constrain'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MetConstrain->save($this->request->data)) {
				$this->Session->setFlash(__('The met constrain has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The met constrain could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MetConstrain.' . $this->MetConstrain->primaryKey => $id));
			$this->request->data = $this->MetConstrain->find('first', $options);
		}
		$constrains = $this->MetConstrain->Constrain->find('list');
		$prospects = $this->MetConstrain->Prospect->find('list');
		$this->set(compact('constrains', 'prospects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MetConstrain->id = $id;
		if (!$this->MetConstrain->exists()) {
			throw new NotFoundException(__('Invalid met constrain'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MetConstrain->delete()) {
			$this->Session->setFlash(__('The met constrain has been deleted.'));
		} else {
			$this->Session->setFlash(__('The met constrain could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
