<?php
/**
 * TODO:ここは先生に書いてもらう
 *
 * Helloworlds Controller
 *
 * @copyright    Copyright 2014, NetCommons Project
 * @link          http://www.netcommons.org NetCommons Project
 * @author        Noriko Arai <arai@nii.ac.jp>
 * @author        Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package       Plugin.Helloworlds.Controller
 * @since         NetCommons 3.0.0.0
 * @license       http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('HelloworldsAppController', 'Helloworlds.Controller');

/**
 * Helloworlds Controller
 *
 * @author        Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package       Plugin.Helloworlds.Controller
 * @since         NetCommons 3.0.0.0
 */
class HelloworldsController extends HelloworldsAppController {

/**
 * Model name
 *
 * @author    Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since     NetCommons 3.0.0.0
 * @var       array
 */
	public $uses = array(
		'Helloworlds.Helloworld',
	);

/**
 * Component name
 *
 * @author    Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since     NetCommons 3.0.0.0
 * @var       array
 */
	public $components = array(
		'Security',
		'RequestHandler'
	);

/**
 * beforeFilter
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since    NetCommons 3.0.0.0
 * @return   void
 * */
	public function beforeFilter() {
		parent::beforeFilter();
	}

/**
 * index
 *
 * @param int $frameId frames.id
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since    NetCommons 3.0.0.0
 * @return   CakeResponse
 */
	public function index($frameId = 0) {
		//件数取得
		$count = $this->Helloworld->find('count');
		$this->set('count', $count);

		//データ取得
		$helloworlds = $this->Helloworld->find('all');
		$this->set('helloworlds', $helloworlds);

		$frameId = intval($frameId);
		$this->set('frameId', $frameId);

		//$blockId = intval($blockId);
		$blockId = 0;
		$this->set('blockId', $blockId);

		//出力
		return $this->render();
	}

/**
 * get edit form
 *
 * @param int $frameId frames.id
 * @param int $blockId blocks.id
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since    NetCommons 3.0.0.0
 * @return   void
 */
	public function get_edit_form($frameId = 0, $blockId = 0) {
		$this->layout = false;
		$this->set('frameId', $frameId);
		$this->set('blockId', $blockId);
	}

}
