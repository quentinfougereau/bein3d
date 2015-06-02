<?php

require_once '../application/models/Client.php';

class ProfilController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        
        $this->view->acces = '../../';
        
        //if (($_POST['name'] != null) && ($_POST['fname'] != null) && ($_POST['adress'] != null) && ($_POST['sexe'] != null)) {
        if (isset($_POST['name'])) {
            $this->view->name = $_POST['name'];
            $this->view->fname = $_POST['fname'];
            $this->view->adress = $_POST['adress'];
            $this->view->sexe = $_POST['sexe'];
        } else {
            $this->view->error = $this->_request->getPost('name');
        }




        $request = $this->getRequest();

        if ($request->isXmlHttpRequest()) { // If it's ajax call
            $name = $this->_getParam('name', 1);
            echo "<script> alert($name) </script>";
        }
    }

    public function updatePersonalDataAction() {
        
        if (isset($_POST['nom'])) {
            //recupération de la valeur envoyée par ajax-form
            $nom = $_POST['nom'];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $adresse = $_POST["adresse"];
            $ville = $_POST["ville"];
            $cp = $_POST["cp"];
//            valeur de test
            $id = 45;

            //mise à jour de la table client
            $client = new Client();
            $data = array(
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'adresse' => $adresse,
                'ville' => $ville,
                'cp' => $cp,
            );
            $where = $client->getAdapter()->quoteInto('Id = ?', $id);

            $client->update($data, $where);
        }
        
    }

}
