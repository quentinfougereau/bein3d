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

        if ($_POST['email'] != "" && $_POST['mdp'] != "") {
            $ct = new Client();
            $all = $ct->fetchAll();
            $connect = 0;
            foreach ($all as $client) {
                if ($client->Login == $_POST['email'] && $client->Motdepasse == $_POST['mdp']) {
                    $connect = 1;
                    $this->view->Login=$client->Nom;
                }
            }
            if ($connect == 1) {
                $this->render('connect');
            } else {
                $this->render('no-connexion');
            }
        } else {
            $this->render('no-connexion');
        }
    }

}
