<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class SellController extends Zend_Controller_Action{
    
    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('menu','sell');
        $layout->assign('chemin','../');
    }
    
    public function indexAction(){

        
    }
    
    public function mesobjetsAction(){

    }
    public function mesventesAction(){

    }
}
