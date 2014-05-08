<?php
App::uses('AppController', 'Controller');
/**
 * Searches Controller
 *
 * @property Search $Search
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SearchesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');

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
		$this->Search->recursive = 0;
		$this->set('searches', $this->Paginator->paginate());
		$this->set('user_info', $this->Auth->user());
	}

/**
 * mysearches method
 *
 * @return void
 */
	public function mysearches() {
		$this->Search->recursive = 0;

		$conditions = array(
			//'Search.user_id' => $this->Auth->user('id')
			'Collaborators.user_id' => $this->Auth->user('id')
		);

		$this->Paginator->settings = array(
        	'conditions' => $conditions,
        	'joins' => array(
        					array(
        						'table' => 'collaborators',
        						'alias' => 'Collaborators',
        						'type' => 'INNER',
        						'conditions' => array(
        							'Collaborators.search_id = Search.id'
        							)
        						)
        					),
        	'limit' => 10
    	);
		$this->set('searches', $this->Paginator->paginate());
		$this->set('user_info', $this->Auth->user());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Search->exists($id)) {
			throw new NotFoundException(__('Invalid search'));
		}
		$options = array(
			'conditions' => array('Search.' . $this->Search->primaryKey => $id),
			'recursive' => 2
			);
		$search = $this->Search->find('first', $options);
		$collaborators = $this->Search->Collaborator->getBySearch($id);
		$this->set(compact('search', 'collaborators'));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Search->create();
			debug($this->request->data);
			$this->request->data['Search']['user_id'] = $this->Auth->user('id');
			if ($this->Search->save($this->request->data)) {
				$this->Session->setFlash(__('The search has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The search could not be saved. Please, try again.'));
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
		if (!$this->Search->exists($id)) {
			throw new NotFoundException(__('Invalid search'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Search->save($this->request->data)) {
				$this->Session->setFlash(__('The search has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The search could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Search.' . $this->Search->primaryKey => $id));
			$this->request->data = $this->Search->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Search->id = $id;
		if (!$this->Search->exists()) {
			throw new NotFoundException(__('Invalid search'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Search->delete()) {
			$this->Session->setFlash(__('The search has been deleted.'));
		} else {
			$this->Session->setFlash(__('The search could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Search->recursive = 0;
		$this->set('searches', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Search->exists($id)) {
			throw new NotFoundException(__('Invalid search'));
		}
		$options = array('conditions' => array('Search.' . $this->Search->primaryKey => $id));
		$this->set('search', $this->Search->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Search->create();
			if ($this->Search->save($this->request->data)) {
				$this->Session->setFlash(__('The search has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The search could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Search->exists($id)) {
			throw new NotFoundException(__('Invalid search'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Search->save($this->request->data)) {
				$this->Session->setFlash(__('The search has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The search could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Search.' . $this->Search->primaryKey => $id));
			$this->request->data = $this->Search->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Search->id = $id;
		if (!$this->Search->exists()) {
			throw new NotFoundException(__('Invalid search'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Search->delete()) {
			$this->Session->setFlash(__('The search has been deleted.'));
		} else {
			$this->Session->setFlash(__('The search could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
