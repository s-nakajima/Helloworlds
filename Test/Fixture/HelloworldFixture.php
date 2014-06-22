<?php
/**
/**
 * Todo: ここは先生に書いてもらう
 *
 * HelloworldFixture
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin..Test.Fixture
 */

/**
 * HelloworldFixture
 *
 * Summary for HelloworldFixture
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin..Test.Case
 */
class HelloworldFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @var     array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @var     array
 */
	public $records = array(
		array(
			'id' => 1,
			'block_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2014-06-22 08:02:11',
			'modified' => '2014-06-22 08:02:11'
		),
	);

}
