<?php
App::uses('Creator', 'Model');

/**
 * Creator Test Case
 *
 */
class CreatorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.creator',
		'app.game',
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
		$this->Creator = ClassRegistry::init('Creator');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Creator);

		parent::tearDown();
	}

}
