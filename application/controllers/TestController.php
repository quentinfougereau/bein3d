<?php
class TestController extends Zend_Controller_Action {
    
    public function init()
    {
        $this->view->acces='../../';
    }
    
    public function indexAction(){
        
    }
}
