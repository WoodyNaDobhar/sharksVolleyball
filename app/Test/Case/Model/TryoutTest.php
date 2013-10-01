<?php
App::uses('Tryout', 'Model');

/**
 * Tryout Test Case
 *
 */
class TryoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tryout',
		'app.division',
		'app.player',
		'app.state',
		'app.position',
		'app.team',
		'app.divisions_tryout'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tryout = ClassRegistry::init('Tryout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tryout);

		parent::tearDown();
	}

}
