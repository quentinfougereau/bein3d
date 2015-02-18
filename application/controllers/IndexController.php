<?php
require_once '../application/models/News.php';
require_once '../application/models/Produit.php';
class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       $p= new Produit();
       $this->view->lesProduits=$p->fetchall();
        $news = new News();
        $this->view->news = $news->getLast5News();
        // action body
    }
    public function formAction(){
     
        $this->view->login= $_POST['login'];
        $this->view->mdp=$_POST['mdp'];
        
                $this->render('form');
    }

}

