<?php
require_once '../application/models/News.php';
require_once '../application/models/Produit.php';
require_once '../application/models/Client.php';

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->acces='../';
        Zend_Session::start();
       $p= new Produit();
       $c= new Client();
       $this->view->lesProduits=$p->fetchall();

       $tab=array();

//       foreach ($p->fetchall() as $unproduit){
//           $idclient=$unproduit->idmaker;
//           $client=$c->unClient($idclient);
//           //$tab[$unproduit->id]=$client->login;
//           //var_dump($client);
//       }


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

