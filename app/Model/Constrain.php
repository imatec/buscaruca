<?php
App::uses('AppModel', 'Model');
/**
 * Constrain Model
 *
 * @property Search $Search
 */
class Constrain extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Search' => array(
			'className' => 'Search',
			'foreignKey' => 'search_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
