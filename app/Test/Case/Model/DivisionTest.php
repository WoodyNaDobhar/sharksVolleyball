<?php
App::uses('Division', 'Model');

/**
 * Division Test Case
 *
 */
class DivisionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.division',
		'app.player',
		'app.state',
		'app.position',
		'app.team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Division = ClassRegistry::init('Division');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Division);

		parent::tearDown();
	}

}
