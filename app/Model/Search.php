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

	public $hasMany = array(
		'Prospect' => array(
            'className' => 'Prospect'
			)
		);

}
