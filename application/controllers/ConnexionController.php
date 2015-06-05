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
        
        $this->view->acces='../../';

        if ($_POST['email'] != "" && $_POST['mdp'] != "") {
            $ct = new Client();
            $all = $ct->fetchAll();
            $connect = 0;
            foreach ($all as $client) {
                if ($client->login == $_POST['email'] && $client->motdepasse == $_POST['mdp']) {
                    $connect = 1;
                    $this->view->login=$client->nom;
                }
            }
            if ($connect == 1) {
                $this->_redirect('profil/index');
            } else {
                $this->render('no-connexion');
            }
        } else {
            $this->render('no-connexion');
        }

    }
    
    

}
