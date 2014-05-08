<?php
App::uses('AppController', 'Controller');
/**
 * Collaborators Controller
 *
 * @property Collaborator $Collaborator
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CollaboratorsController extends AppController {

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
		$this->Collaborator->recursive = 0;
		$this->set('collaborators', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Collaborator->exists($id)) {
			throw new NotFoundException(__('Invalid Collaborator'));
		}
		$options = array('conditions' => array('Collaborator.' . $this->Collaborator->primaryKey => $id));
		$this->set('Collaborator', $this->Collaborator->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Collaborator->create();
			if ($this->Collaborator->save($this->request->data)) {
				$this->Session->setFlash(__('The Collaborator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Collaborator could not be saved. Please, try again.'));
			}
		}
		$users = $this->Collaborator->User->find('list');
		$searches = $this->Collaborator->Search->find('list');
		$this->set(compact('users', 'searches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Collaborator->exists($id)) {
			throw new NotFoundException(__('Invalid Collaborator'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Collaborator->save($this->request->data)) {
				$this->Session->setFlash(__('The Collaborator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Collaborator could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Collaborator.' . $this->Collaborator->primaryKey => $id));
			$this->request->data = $this->Collaborator->find('first', $options);
		}
		$users = $this->Collaborator->User->find('list');
		$searches = $this->Collaborator->Search->find('list');
		$this->set(compact('users', 'searches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Collaborator->id = $id;
		if (!$this->Collaborator->exists()) {
			throw new NotFoundException(__('Invalid Collaborator'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Collaborator->delete()) {
			$this->Session->setFlash(__('The Collaborator has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Collaborator could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}