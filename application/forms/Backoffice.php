<?php

class Application_Form_Backoffice extends Zend_Form {

    public function init() {
        $this->setName('backoffice'); //Nom du formulaire lors de l'affichage html

        $login = new Zend_Form_Element_Text('login');
        $login->setLabel('Login')
                ->setRequired(true)
                ->setErrorMessages(array('Le champ login ne peut pas être vide'))
                ->addValidator('NotEmpty');

        $mdp = new Zend_Form_Element_Password('mdp');
        $mdp->setLabel('Mot de passe')
                ->setRequired(true)
                ->setErrorMessages(array('Le champ mot de passe ne peut pas être vide'))
                ->addValidator('NotEmpty');
        
         $envoyer = new Zend_Form_Element_Submit('envoyer');
         $envoyer->setAttrib('id', 'boutonenvoyer');
         
         $this->addElements(array($login, $mdp, $envoyer));
    }

}
