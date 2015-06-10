<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnexionModel
 *
 * @author Pierre
 */
class Client extends Zend_Db_Table_Abstract {

    //put your code here 
    protected $_name = 'client';
    protected $_primary = 'Id';
    protected $_sequence = false;

//    protected $_rowClass = 'ClientRow';


    public function inscription($tabclient) {
        $this->insert($tabclient, 'client');
    }

    public function obtenirClient($id) {
        $row = $this->fetchRow("Id = '" . $id . "'");
        if (!$row) {
            throw new Exception("impossible de trouver l'enregistrement $id");
        }
        return $row->toArray();
    }

    public function modifierClient($id, $nom, $prenom, $login, $mdp, $email, $adresse, $cp, $ville) {
        $data = array(
            'Id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'login' => $login,
            'motdepasse' => $mdp,
            'email' => $email,
            'adresse' => $adresse,
            'cp' => $cp,
            'ville' => $ville
        );
        $this->update($data, "Id = '" . $id . "'");
    }

    public function ajouterClient($id, $nom, $prenom, $login, $mdp, $email, $adresse, $cp, $ville) {
        $data = array(
            'Id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'login' => $login,
            'motdepasse' => $mdp,
            'email' => $email,
            'adresse' => $adresse,
            'cp' => $cp,
            'ville' => $ville
        );
        $this->insert($data);
    }

    public function supprimerClient($id) {
        $this->delete("Id = '" . $id . "'");
    }

}
