<?php
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once('log_test.php');

class AllTests extends TestSuite {
    function __construct() {
        parent::__construct();
        $this->add(new TestOfLogging());
    }
}
?>