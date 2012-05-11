<?php
App::uses('AppModel', 'Model');
/**
 * Clientes Model
 *
 */
class Clientes extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'activo' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
