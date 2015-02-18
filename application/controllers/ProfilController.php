<?php

class ProfilController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
        //if (($_POST['name'] != null) && ($_POST['fname'] != null) && ($_POST['adress'] != null) && ($_POST['sexe'] != null)) {
        if(isset($_POST['name'])){
         $this->view->name = $_POST['name'];
        $this->view->fname=$_POST['fname'];
        $this->view->adress=$_POST['adress'];
        $this->view->sexe=$_POST['choixsexe'];
        
        var_dump($_POST);
        
        }else {
            $this->view->error="caca";
        }
        
                
    }


}

