<?php
App::uses('AppController', 'Controller');
/**
 * Prospects Controller
 *
 * @property Prospect $Prospect
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProspectsController extends AppController {

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
		$this->Prospect->recursive = 0;
		$this->set('prospects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prospect->exists($id)) {
			throw new NotFoundException(__('Invalid prospect'));
		}
		$options = array('conditions' => array('Prospect.' . $this->Prospect->primaryKey => $id));
		$this->set('prospect', $this->Prospect->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prospect->create();
			if ($this->Prospect->save($this->request->data)) {
				$this->Session->setFlash(__('The prospect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prospect could not be saved. Please, try again.'));
			}
		}
		$searches = $this->Prospect->Search->find('list');
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
		if (!$this->Prospect->exists($id)) {
			throw new NotFoundException(__('Invalid prospect'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prospect->save($this->request->data)) {
				$this->Session->setFlash(__('The prospect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prospect could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prospect.' . $this->Prospect->primaryKey => $id));
			$this->request->data = $this->Prospect->find('first', $options);
		}
		$searches = $this->Prospect->Search->find('list');
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
		$this->Prospect->id = $id;
		if (!$this->Prospect->exists()) {
			throw new NotFoundException(__('Invalid prospect'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Prospect->delete()) {
			$this->Session->setFlash(__('The prospect has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prospect could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Prospect->recursive = 0;
		$this->set('prospects', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Prospect->exists($id)) {
			throw new NotFoundException(__('Invalid prospect'));
		}
		$options = array('conditions' => array('Prospect.' . $this->Prospect->primaryKey => $id));
		$this->set('prospect', $this->Prospect->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Prospect->create();
			if ($this->Prospect->save($this->request->data)) {
				$this->Session->setFlash(__('The prospect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prospect could not be saved. Please, try again.'));
			}
		}
		$searches = $this->Prospect->Search->find('list');
		$this->set(compact('searches'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Prospect->exists($id)) {
			throw new NotFoundException(__('Invalid prospect'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prospect->save($this->request->data)) {
				$this->Session->setFlash(__('The prospect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prospect could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prospect.' . $this->Prospect->primaryKey => $id));
			$this->request->data = $this->Prospect->find('first', $options);
		}
		$searches = $this->Prospect->Search->find('list');
		$this->set(compact('searches'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Prospect->id = $id;
		if (!$this->Prospect->exists()) {
			throw new NotFoundException(__('Invalid prospect'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Prospect->delete()) {
			$this->Session->setFlash(__('The prospect has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prospect could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
