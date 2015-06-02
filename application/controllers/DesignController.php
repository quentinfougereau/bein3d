<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DesignController extends Zend_Controller_Action{
    
    public function init(){
        
    }
    
    public function indexAction(){
        $this->view->acces='../../';
        Zend_Session::start();
    }
    
    public function creerAction(){
        $this->view->acces='../../';
    }
    
    public function didactAction(){
        $this->view->acces='../../';
    }
    
    public function importerAction(){
        $this->view->acces='../../';
    }
}
