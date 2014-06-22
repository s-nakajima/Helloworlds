<?php
/**
 * Todo: ここは先生に書いてもらう
 *
 * Helloworld Model
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds.Model
 */

App::uses('HelloworldsAppModel', 'Helloworlds.Model');

/**
 * Helloworld Model
 *
 * Summary for Helloworld Model
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds.Model
 * @property    Block $Block
 */
class Helloworld extends HelloworldsAppModel {

/**
 * Validation rules
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @var     array
 */
	public $validate = array(
		'block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @var     array
 */
	public $belongsTo = array(
		'Block' => array(
			'className' => 'Block',
			'foreignKey' => 'block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
