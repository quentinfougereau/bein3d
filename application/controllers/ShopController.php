<?php
require_once '../application/models/Produit.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ShopController extends Zend_Controller_Action{
    
    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('menu','shop');
        $layout->assign('chemin','../');
    }
    
    public function indexAction(){
        Zend_Session::start();
    }
    
    public function boutiqueAction(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
        $p= new Produit();
        $this->view->lesProduits=$p->fetchall();
       
        
        
    }
    public function nouveautesAction(){
        
    }
    public function makersAction(){
        
    }
}
