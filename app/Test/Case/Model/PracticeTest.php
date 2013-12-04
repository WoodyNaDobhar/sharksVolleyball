<?php
App::uses('Practice', 'Model');

/**
 * Practice Test Case
 *
 */
class PracticeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.practice',
		'app.team',
		'app.division',
		'app.player',
		'app.state',
		'app.position',
		'app.tryout',
		'app.divisions_tryout'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Practice = ClassRegistry::init('Practice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Practice);

		parent::tearDown();
	}

}
