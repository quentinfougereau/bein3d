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
require_once '../application/models/Produit.php';

class PanierController extends Zend_Controller_Action {

    public function indexAction() {
        $this->view->acces = '../../../';
        Zend_Session::start();
        if (!isset($_SESSION['nbproduit'])) {
//            $nbproduit = new Zend_Session_Namespace('nbproduit');
//           $nbproduit->array = array();
            $_SESSION['nbproduit']=array();
        };
         
        $p = new Produit();
        $produit = $p->getproduit($_POST['donnees']);

        $tabprod = array();
        foreach ($produit as $prod) {
            $tabprod = array(
                "id" => $prod['id'],
                "nom" => $prod['nom'],
                "prix" => $prod['prixunitaire'],
            );
        }
        
        array_push($_SESSION['nbproduit'], $tabprod);
        
        var_dump($_SESSION['nbproduit']);
    
    }
    public function sup(){
        
    }

}
