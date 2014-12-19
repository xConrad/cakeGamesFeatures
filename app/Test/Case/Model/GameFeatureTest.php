<?php
App::uses('GameFeature', 'Model');

/**
 * GameFeature Test Case
 *
 */
class GameFeatureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.game_feature',
		'app.game',
		'app.creator',
		'app.feature',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GameFeature = ClassRegistry::init('GameFeature');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GameFeature);

		parent::tearDown();
	}

}
