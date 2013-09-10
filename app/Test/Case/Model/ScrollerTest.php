<?php
App::uses('Scroller', 'Model');

/**
 * Scroller Test Case
 *
 */
class ScrollerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.scroller');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Scroller = ClassRegistry::init('Scroller');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Scroller);

		parent::tearDown();
	}

}
