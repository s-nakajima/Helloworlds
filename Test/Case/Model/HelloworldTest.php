<?php
/**
 * Todo: ここは先生に書いてもらう
 *
 * Helloworld Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds..Test.Case
 */

App::uses('Helloworld', 'Helloworlds.Model');

/**
 * Helloworld Test Case
 *
 * Summary for Helloworld Test Case
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Helloworlds..Test.Case
 */
class HelloworldTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @var     array
 */
	public $fixtures = array(
		'plugin.helloworlds.helloworld',
		'plugin.helloworlds.block',
		'plugin.helloworlds.language',
		'plugin.helloworlds.blocks_language'
	);

/**
 * setUp method
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Helloworld = ClassRegistry::init('Helloworlds.Helloworld');
	}

/**
 * tearDown method
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @return void
 */
	public function tearDown() {
		unset($this->Helloworld);
		parent::tearDown();
	}

}
