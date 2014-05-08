<?php
App::uses('AppModel', 'Model');
/**
 * Collaboration Model
 *
 * @property User $User
 * @property Search $Search
 */
class Collaborator extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Search' => array(
			'className' => 'Search',
			'foreignKey' => 'search_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function getBySearch($search_id = NULL){
		$conditions = array( 'Collaborator.search_id' => $search_id
			);
		$result = $this->find(
			'all',
			array(
				'conditions' => $conditions
				)
			);
		return $result;
	}
}
