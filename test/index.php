<?php
define("APPLICATION_PATH",  dirname(__FILE__));

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() //Выполнение методов, опрделенных в Bootstrap.php
->run();
class IndexController extends Yaf_Controller_Abstract {
    /* действие по умолчанию */
    public function indexAction() {
        $this->getView()->word = "hello world";
        //или
        // $this->getView()->word = "hello world";
    }
}

?>