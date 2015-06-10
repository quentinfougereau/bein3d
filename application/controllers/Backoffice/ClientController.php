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
        $form = new Application_Form_AjouterModifierClient();
        $form->envoyer->setLabel('Ajouter');
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $id = $form->getValue('Id');
                $nom = $form->getValue('nom');
                $prenom = $form->getValue('prenom');
                $login = $form->getValue('login');
                $mdp = $form->getValue('motdepasse');
                $email = $form->getValue('email');
                $adresse = $form->getValue('adresse');
                $cp = $form->getValue('cp');
                $ville = $form->getValue('ville');
                $lesClients = new Client();
                $lesClients->ajouterClient($id, $nom, $prenom, $login, $mdp, $email, $adresse, $cp, $ville);

                $this->_helper->redirector('voir');
            } else {
                $form->populate($formData);
            }
        }
    }

    public function modifierAction() {
        $form = new Application_Form_AjouterModifierClient();
        $form->envoyer->setLabel('Sauvegarder');
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $id = $form->getValue('Id');
                $nom = $form->getValue('nom');
                $prenom = $form->getValue('prenom');
                $login = $form->getValue('login');
                $mdp = $form->getValue('motdepasse');
                $email = $form->getValue('email');
                $adresse = $form->getValue('adresse');
                $cp = $form->getValue('cp');
                $ville = $form->getValue('ville');
                $lesClients = new Client();
                $lesClients->modifierClient($id, $nom, $prenom, $login, $mdp, $email, $adresse, $cp, $ville);

                $this->_helper->redirector('voir');
            } else {
                $form->populate($formData);
            }
        } else {
            $id = $this->getParam('id', 0);
            $lesClients = new Client();
            $form->populate($lesClients->obtenirClient($id));
        }
    }

    public function supprimerAction() {
        if ($this->getRequest()->isPost()) {
            $supprimer = $this->getRequest()->getPost('supprimer');
            if ($supprimer == 'Oui') {
                $id = $this->getRequest()->getPost('id');
                $lesClients = new Client();
                $lesClients->supprimerClient($id);
            }
            $this->redirect('backoffice_client/voir');
        } else {
            $id = $this->_getParam('id', 0);
            $lesClients = new Client();
            $this->view->client = $lesClients->obtenirClient($id);
        }
    }

}
