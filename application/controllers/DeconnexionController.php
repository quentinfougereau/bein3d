<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeconnexionController
 *
 * @author quentin
 */
class DeconnexionController extends Zend_Controller_Action {

    public function indexAction() {
        Zend_Session::destroy();
        $this->_redirect('http://localhost/bein3d/public/');
    }

}
