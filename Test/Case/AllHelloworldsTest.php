<?php
/**
 * TODO:ここは先生に書いてもらう
 *
 * Helloworlds All Test Case
 *
 * @copyright    Copyright 2014, NetCommons Project
 * @link          http://www.netcommons.org NetCommons Project
 * @author        Noriko Arai <arai@nii.ac.jp>
 * @author        Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package       app.Plugin.Helloworlds.Test.Case
 * @since         NetCommons 3.0.0.0
 * @license       http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Helloworlds All Test Case
 *
 * @author        Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package       app.Plugin.Helloworlds.Test.Case
 * @since         NetCommons 3.0.0.0
 */
class AllHelloworldsTest extends CakeTestSuite {

/**
 * All test suite
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since    NetCommons 3.0.0.0
 * @return   CakeTestSuite
 */
	public static function suite() {
		$plugin = preg_replace('/^All([\w]+)Test$/', '$1', __CLASS__);
		$suite = new CakeTestSuite(sprintf('All %s Plugin tests', $plugin));
		$task = 'HelloworldsController';
		$suite->addTestFile(CakePlugin::path($plugin) . 'Test' . DS . 'Case' . DS . 'Controller' . DS . $task . 'Test.php');
		return $suite;
	}
}
