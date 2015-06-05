<?php

require_once '../application/models/Client.php';

class ProfilController extends Zend_Controller_Action {

    public function init() {
        
    }

    public function indexAction() {
        
        Zend_Session::start();  
        $this->view->acces = '../../';
        
        $client = new Client();
        $currentClient = $client->fetchRow($client->select()->where('login = ?', $_SESSION['email']));
        
        $_SESSION["idClient"] = $currentClient["Id"];
        $this->view->nomCurrentClient = $currentClient['nom'];
        $this->view->prenomCurrentClient = $currentClient['prenom'];
        $this->view->emailCurrentClient = $currentClient['email'];
        $this->view->adresseCurrentClient = $currentClient['adresse'];
        $this->view->cpCurrentClient = $currentClient['cp'];
        $this->view->villeCurrentClient = $currentClient['ville'];
        
    }

    public function updatePersonalDataAction() {
        Zend_Session::start(); 
        
        if (isset($_POST['nom'])) {
            //recupération de la valeur envoyée par ajax-form
            $nom = $_POST['nom'];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $adresse = $_POST["adresse"];
            $ville = $_POST["ville"];
            $cp = $_POST["cp"];
            
            //mise à jour du client dans la table client
            $client = new Client();
            $data = array(
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'adresse' => $adresse,
                'ville' => $ville,
                'cp' => $cp,
            );
            $where = $client->getAdapter()->quoteInto('Id = ?', $_SESSION["idClient"]);

            $client->update($data, $where);
        }
        
    }

}
