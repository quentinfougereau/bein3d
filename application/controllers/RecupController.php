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
require_once '../application/models/Commentaire.php';
class RecupController extends Zend_Controller_Action {

    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
    }
    //put your code here
    public function indexAction() {
        $this->_helper->layout->disableLayout();
        $news = new News();
        if (!isset($_GET['id'])) {
            
            $this->view->news = $news->getNews();
        } else {
          
            ini_set('error_reporting', E_STRICT);
            $this->view->news =$news->getLastNews($_GET['id']);
            
        }
     
    }
    public function commentaireAction() {
        $this->_helper->layout->disableLayout();
        $com = new Commentaire();
        var_dump($_POST);
        $tab=array(
            "sujet"=>null,
            "texte"=>$_POST['texte'],
            "iduser"=>$_POST['iduser'],
            "idnew"=>$_POST['idnew'],
        );
//        $com->insert($tab);
        
     
    }

   

}
