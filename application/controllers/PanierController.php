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
    
    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
    }

    public function indexAction() {
        Zend_Session::start();
        if (!isset($_SESSION['nbproduit'])) {
//            $nbproduit = new Zend_Session_Namespace('nbproduit');
//           $nbproduit->array = array();
            $_SESSION['nbproduit'] = array();
        };

        $p = new Produit();
        $produit = $p->getproduit($_POST['donnees']);

        $tabprod = array();
        foreach ($produit as $prod) {

            $tabprod = array(
                "id" => $prod['id'],
                "nom" => $prod['nom'],
                "prix" => $prod['prixunitaire'],
                "quantite" => 1,
            );
            var_dump($tabprod['id']);
            $c=0;
            foreach ($_SESSION['nbproduit'] as $key => $prod2) {
                var_dump($prod2['id']);
                if ($prod2['id']==$tabprod['id']) {
                    $c=1;
                }
            }
            if($c==0){
                    array_push($_SESSION['nbproduit'], $tabprod);
                } else {
                    foreach ($_SESSION['nbproduit'] as $key => $prod2) {

                        if ($prod2['id'] == $prod['id']) {

                            $_SESSION['nbproduit'][$key]['quantite'] = $prod2['quantite'] + 1;
                            echo "fepfoiezefnzeoifzioefze";
                        }
                    }
                }
            
        }

    }

    public function supprimerAction() {
        Zend_Session::start();
        $this->_helper->layout->disableLayout();
        foreach ($_SESSION['nbproduit'] as $key => $prod) {
            if ($prod['id'] == $_POST['donnees']) {
                unset($_SESSION['nbproduit'][$key]);
            }
        }

    }
    public function ajouterAction() {
        Zend_Session::start();
        $this->_helper->layout->disableLayout();
        foreach ($_SESSION['nbproduit'] as $key => $prod) {
            if ($prod['id'] == $_POST['donnees']) {
                $_SESSION['nbproduit'][$key]['quantite']=$prod['quantite']+1;
            }
        }

    }
    public function enleverAction() {
         Zend_Session::start();
        $this->_helper->layout->disableLayout();
        foreach ($_SESSION['nbproduit'] as $key => $prod) {
            if ($prod['id'] == $_POST['donnees']) {
                $_SESSION['nbproduit'][$key]['quantite']=$prod['quantite']-1;
            }
        }

    }

    public function refreshAction() {
        Zend_Session::start();
        $this->_helper->layout->disableLayout();
    }

}
