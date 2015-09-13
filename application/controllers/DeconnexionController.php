<?php

class DeconnexionController extends Zend_Controller_Action {

    public function indexAction() {
        Zend_Session::destroy();
        $this->_redirect('http://localhost/bein3d/public/');
    }

}
