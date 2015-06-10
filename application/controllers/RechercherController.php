<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Pierre
 */
require_once '../application/models/News.php';
require_once '../application/models/Produit.php';
class RechercherController extends Zend_Controller_Action {

    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
    }
    //put your code here
    public function indexAction() {
       
        $news = new News();
        $p = new Produit();
        if(isset($_POST['rechercher'])){
        $donnée=$_POST['rechercher'];
        var_dump($donnée);
        $newrechercher=$news->getrechercher($donnée);
        
        var_dump($newrechercher);
        $produitrechercher=$p->getrechercher($donnée);
     
         $this->view->produit="$produitrechercher";
        }
       
     
    }
    public function refreshAction(){
        
    }
    

   

}
