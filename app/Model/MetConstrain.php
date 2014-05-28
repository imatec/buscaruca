<?php
App::uses('AppModel', 'Model');
/**
 * MetConstrain Model
 *
 * @property Constrain $Constrain
 * @property Prospect $Prospect
 */
class MetConstrain extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'constrain_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Constrain' => array(
			'className' => 'Constrain',
			'foreignKey' => 'constrain_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prospect' => array(
			'className' => 'Prospect',
			'foreignKey' => 'prospect_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
