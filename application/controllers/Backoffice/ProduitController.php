<?php

include ('../application/models/Produit.php');
include ('../application/models/Client.php');

class Backoffice_ProduitController extends Zend_Controller_Action {

    public function voirAction() {
        $lesProduits = new Produit();
        $this->view->lesProduits = $lesProduits->fetchAll();
        $this->view->setEscape('htmlentities');
        $this->view->setEncoding('ISO-8859-1');
    }

    public function ajouterAction() {
        $lesClients = new Client();
        $idClients = $lesClients->getIdClients();
        var_dump($idClients);
        $form = new Application_Form_AjouterModifierProduit();
        $form->getElement('idmaker')->setMultiOptions($idClients);
        $form->envoyer->setLabel('Ajouter');
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $id = $form->getValue('id');
                $nom = $form->getValue('nom');
                $prixunitaire = $form->getValue('prixunitaire');
                $idmaker = $form->getValue('idmaker');
                $categorie = $form->getValue('categorie');
                $lesProduits = new Produit();
                $lesProduits->ajouterProduit($id, $nom, $prixunitaire, $idmaker, $categorie);

                $this->_helper->redirector('voir');
            } else {
                $form->populate($formData);
            }
        }
    }

    public function modifierAction() {
        $form = new Application_Form_AjouterModifierProduit();
        $form->envoyer->setLabel('Sauvegarder');
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $id = $form->getValue('id');
                $nom = $form->getValue('nom');
                $prixunitaire = $form->getValue('prixunitaire');
                $idmaker = $form->getValue('idmaker');
                $categorie = $form->getValue('categorie');
                $lesProduits = new Produit();
                $lesProduits->ajouterProduit($id, $nom, $prixunitaire, $idmaker, $categorie);

                $this->_helper->redirector('voir');
            } else {
                $form->populate($formData);
            }
        } else {
            $id = $this->getParam('id', 0);
            $lesProduits = new Produit();
            $form->populate($lesProduits->obtenirProduit($id));
        }
    }

    public function supprimerAction() {
        if ($this->getRequest()->isPost()) {
            $supprimer = $this->getRequest()->getPost('supprimer');
            if ($supprimer == 'Oui') {
                $id = $this->getRequest()->getPost('id');
                $lesProduits = new Produit();
                $lesProduits->supprimerProduit($id);
            }
            $this->_helper->redirector('voir');
        } else {
            $id = $this->_getParam('id', 0);
            $lesProduits = new Produit();
            $this->view->produit = $lesProduits->obtenirProduit($id);
        }
    }

}
