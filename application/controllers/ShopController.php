<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ShopController extends Zend_Controller_Action{
    
    public function init(){
        
    }
    
    public function indexAction(){
        $this->view->acces='../../';
        Zend_Session::start();
    }
    
    public function boutiqueAction(){
        $this->view->acces='../../';
        $db=Zend_Db_Table::getDefaultAdapter();
        $req="select * from produit";
        $result=$db->fetchAll($req);
        $this->view->lesProduits=$result;
        
        
    }
    public function nouveautesAction(){
        $this->view->acces='../../';
    }
    public function makersAction(){
        $this->view->acces='../../';
    }
}
