<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Pierre
 */
require_once '../application/models/News.php';
require_once '../application/models/Produit.php';

class RechercherController extends Zend_Controller_Action {

    public function init() {
        $layout = $this->_helper->layout();
        $layout->assign('chemin', '../');
    }

    //put your code here
    public function indexAction() {
        //mettre dans une session puis faire comme la panier
        //rechargement de index impossible pas de donnée dans poste
        //creation d'une action refresh
        $this->_helper->layout->disableLayout();
        Zend_Session::start();
        

            $_SESSION['produitrechercher'] = array();
            $_SESSION['newsrechercher'] = array();
        $news = new News();
        $p = new Produit();
        if (isset($_POST['rechercher'])) {
            if ($_POST['rechercher'] != '') {
                $donnée = $_POST['rechercher'];
                var_dump($donnée);
                $newrechercher = $news->getrechercher($donnée);
                 var_dump($newrechercher);
                array_push($_SESSION['newsrechercher'], $newrechercher);

                $produitrechercher = $p->getrechercher($donnée);
                array_push($_SESSION['produitrechercher'], $produitrechercher);
//                var_dump($_SESSION['produitrechercher']);
            }
        }
    }

    public function refreshAction() {
        Zend_Session::start();
        
        $this->_helper->layout->disableLayout();
    }

}
