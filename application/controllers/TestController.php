<?php
class TestController extends Zend_Controller_Action {
    
    public function init()
    {
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
    }
    
    public function indexAction(){
        
    }
}
