<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientController
 *
 * @author JimSobieski
 */
require_once '../application/models/Client.php';

class ClientController extends Zend_Controller_Action {
    
    
    public function inscriptionAction(){
        
        $this->view->acces='../../../';
        

        
        $client=new Client();
        if ($_POST['typeform']=='inscription'){           
            $tab=array(
                //'Id'=> '',
                'login' => $_POST['login'],
                'motdepasse' => $_POST['mdp']
                
            );
            $this->view->login=$_POST['login'];
            $client->inscription($tab);
        }
    }
}
