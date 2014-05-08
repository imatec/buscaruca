<?php
App::uses('AppModel', 'Model');
/**
 * Search Model
 *
 */
class Search extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $belongsTo = array(
		'User'  => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			)
		);
	public $hasMany = array(
		'Prospect' => array(
            'className' => 'Prospect'
			),
		'Collaborator' => array(
			'className' => 'Collaborator'
			)
		);
}
