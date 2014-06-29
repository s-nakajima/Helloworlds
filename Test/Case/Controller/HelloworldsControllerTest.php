<?php
/**
 * Todo: ここは先生に書いてもらう
 *
 * HelloworldsController Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
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

/**
 * setUp
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since    NetCommons 3.0.0.0
 * @return   void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * index
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since    NetCommons 3.0.0.0
 * @return   void
 */
	public function testIndex() {
		$this->testAction('/helloworlds/helloworlds/index', array('method' => 'get'));
		$this->assertTextNotContains('ERROR', $this->view);
	}

}
