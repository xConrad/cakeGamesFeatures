<?php
App::uses('Discussion', 'Model');

/**
 * Discussion Test Case
 *
 */
class DiscussionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discussion',
		'app.game',
		'app.creator',
		'app.feature',
		'app.user',
		'app.game_feature'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Discussion = ClassRegistry::init('Discussion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Discussion);

		parent::tearDown();
	}

}
