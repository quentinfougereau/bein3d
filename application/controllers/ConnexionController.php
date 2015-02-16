<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnexionController
 *
 * @author Pierre
 */
require_once '../application/models/Client.php';

class ConnexionController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }
    public function indexAction() {
        foreach($all as $client){
            if($client->Nom==$_POST['email'] && $client->Motdepasse==$_POST['mdp']){
                $this->render('index');
                exit();
            };
        }
                   $this->render('noConnexion');
    }
  

}
