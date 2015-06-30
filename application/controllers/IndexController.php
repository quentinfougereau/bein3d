<?php

require_once '../application/models/News.php';
require_once '../application/models/Produit.php';
require_once '../application/models/Client.php';
require_once '../application/models/Categorie.php';
require_once '../application/models/Imagecat.php';
class IndexController extends Zend_Controller_Action {


    public function init()
    {
        $layout=$this->_helper->layout();
        $layout->assign('menu','home');
    }

    public function indexAction()
    {

        $layout=$this->_helper->layout();
        $layout->assign('chemin','');
        $layout->assign('menusub','accueil');
        Zend_Session::start();     

        if (Zend_Session::sessionExists()) {
            Zend_Session::start();
        }
        //$this->layout()->_helper->setVariable('MaVariable','Valeur');
       $p= new Produit();
       $c= new Client();
       $this->view->lesProduits=$p->fetchall();

       $tab=array();
        $news = new News();
        $this->view->news = $news->getLast5News();
        // action body
    }
    
    public function qsnAction(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
        $layout->assign('menusub','qsn');
    }
    
    public function nosproduitsAction(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
        $c= new Categorie();
        $categorie=$c->getcat();
        $imagescat =  Array();
        foreach($categorie as $cat){
            
            $img=$c->getimagecategorie($cat['Id']);
            array_push($imagescat, $img);
          
        }
        
        $this->view->lesimages=$imagescat;
        $this->view->lesCategories=$categorie;
    }

    public function formAction() {

        $this->view->login = $_POST['login'];
        $this->view->mdp = $_POST['mdp'];

        $this->render('form');
    }

}
