<?php

class Backoffice_ConnexionController extends Zend_Controller_Action {

    public function indexAction() {
        $this->_helper->layout->setLayout('backoffice_layout');

        $form = new Application_Form_Backoffice();
        $this->view->form = $form;

        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $login = $form->getValue('login');
                $mdp = $form->getValue('mdp');
                $authAdapter = $this->getAuthAdapter();
                $authAdapter->setIdentity($login) //ce que j'ai inscrit dans le formulaire
                        ->setCredential($mdp);

                $auth = Zend_Auth::getInstance();
                $result = $auth->authenticate($authAdapter);

                if ($result->isValid()) {
                    $identity = $authAdapter->getResultRowObject(); //recup tous les champs dans la table client
                    $authStorage = $auth->getStorage();
                    $authStorage->write($identity);
                    $this->_redirect('backoffice_index/index');
                } else {
                    $this->view->errorMessage = 'Echec d\'authentification ';
                }
            }
        }
    }

    private function getAuthAdapter() {
        $authAdapter = new Zend_Auth_Adapter_DbTable(Zend_Db_Table::getDefaultAdapter());
        $authAdapter->setTableName('client') //le nom de la table dans la BDD
                ->setIdentityColumn('login')
                ->setCredentialColumn('motdepasse');
        return $authAdapter;
    }

}
