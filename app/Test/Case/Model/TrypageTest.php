<?php
App::uses('Trypage', 'Model');

/**
 * Trypage Test Case
 *
 */
class TrypageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tryout'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Trypage = ClassRegistry::init('Trypage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Trypage);

		parent::tearDown();
	}

}
