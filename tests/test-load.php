<?php
class LoadTest extends WP_UnitTestCase {

    public function setUp(){
        parent::setUp();
        $this->plugin=new WP_Swiftmailer();
    }
	function testLoad() {
        WP_Swiftmailer::load();;
		// replace this with some actual testing code
		$this->assertTrue(class_exists('Swift_Message'));
	}
}
