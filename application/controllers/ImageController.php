<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ImageController extends Zend_Controller_Action{
    
    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
    }
}