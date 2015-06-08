<?php

include ('../application/models/Client.php');

class Backoffice_ClientController extends Zend_Controller_Action {

    public function voirAction() {
        $lesClients = new Client();
        $this->view->lesClients = $lesClients->fetchAll();
        $this->view->setEscape('htmlentities');
        $this->view->setEncoding('ISO-8859-1');
    }

    public function ajouterAction() {
        
    }

    public function modifierAction() {
        
    }

    public function supprimerAction() {
        if ($this->getRequest()->isPost()) {
            $supprimer = $this->getRequest()->getPost('supprimer');
            if ($supprimer == 'Oui') {
                $id = $this->getRequest()->getPost('id');
                $lesVisiteurs = new Application_Model_DbTable_Visiteur();
                $lesVisiteurs->supprimerVisiteur($id);
            }
            $this->redirect('/visiteur');
        } else {
            $id = $this->_getParam('id', 0);
            $lesClients = new Client();
            $this->view->client = $lesClients->obtenirClient($id);
        }
    }

}
