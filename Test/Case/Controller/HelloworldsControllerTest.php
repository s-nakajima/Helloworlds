<?php
/**
/**
 * Todo: ここは先生に書いてもらう
 *
 * HelloworldsController Test Case
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds..Test.Case
 */

App::uses('HelloworldsController', 'Helloworlds.Controller');

/**
 * HelloworldsController Test Case
 *
 * Summary for HelloworldsController Test Case
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds..Test.Case
 */
class HelloworldsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @var     array
 */
	public $fixtures = array(
		'plugin.helloworlds.helloworld',
		'plugin.helloworlds.site_setting',
		'plugin.helloworlds.site_setting_value'
	);

}
