<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    public function formAction(){
       
        $this->view->login= $_POST['Login'];
        $this->view->mdp=$_POST['mdp'];
        
                $this->render('form');
    }

}

