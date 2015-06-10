<?php

class Application_Form_AjouterModifierClient extends Zend_Form {

    public function init() {
        $this->setName('ajouterModifierClient');

//        $idValide = new Zend_Validate_Regex('(^[a-z][0-9]{1,4}$)');
//        $idValide->setMessage('1 alphabet minuscule suivi d’au plus 4 chiffres');
        $id = new Zend_Form_Element_Text('Id');
        $id->setLabel('Identifiant')
                ->setRequired(true)
                ->addFilter('StripTags') //supprime les balises dans la chaîne
                ->addFilter('StringTrim'); //supprime les espaces en début et fin de chaîne
//                ->addValidator($idValide);
//        $nomValide = new Zend_Validate_Regex('(^[A-Z][a-z]*$)');
//        $nomValide->setMessage('1er caractère en majuscule, la suite en minuscule');
        $nom = new Zend_Form_Element_Text('nom');
        $nom->setLabel('Nom')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
//                ->addValidator($nomValide);
//        $prenomValide = new Zend_Validate_Regex('(^[A-Z][a-z]*$)');
//        $prenomValide->setMessage('1er caractère en majuscule, la suite en minuscule');
        $prenom = new Zend_Form_Element_Text('prenom');
        $prenom->setLabel('Prenom')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
//              ->addValidator($prenomValide);

        $login = new Zend_Form_Element_Text('login');
        $login->setLabel('login')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

        $mdp = new Zend_Form_Element_Text('motdepasse');
        $mdp->setLabel('Mot De Passe')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

//        $mdpConfirm = new Zend_Form_Element_Password('mdpConfirm'); // à changer en Zend_Form_Element_Password
//        $mdpConfirm->setLabel('Confirmation de mot de passe')
//                ->setRequired(true)
//                ->addFilter('StripTags')
//                ->addFilter('StringTrim')
//                ->addValidator('NotEmpty')
//                ->addValidator(
//                        'Identical', TRUE, array('token' => 'mdp',
//                    'messages' => array(
//                        'notSame' => 'Le mot de passe et la confirmation de mot de passe ne correspondent pas. Ils doivent être pareil.',
//                        'missingToken' => 'Le mot de passe et la confirmation de mot de passe ne correspondent pas. Ils doivent être pareil.')));

        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Adresse E-mail')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

        $adresse = new Zend_Form_Element_Text('adresse');
        $adresse->setLabel('Adresse')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

        $cp = new Zend_Form_Element_Text('cp');
        $cp->setLabel('Code Postal')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

        $ville = new Zend_Form_Element_Text('ville');
        $ville->setLabel('ville')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

//        $dateEmbauche = new Zend_Form_Element_Text('dateEmbauche');
//        $dateEmbauche->setLabel('Date Embauche (format AAAA-MM-JJ)')
//                ->setRequired(true)
//                ->addFilter('StripTags')
//                ->addFilter('StringTrim')
//                ->addValidator('NotEmpty');

        $envoyer = new Zend_Form_Element_Submit('envoyer');
        $envoyer->setAttrib('id', 'boutonenvoyer');

        $this->addElements(array($id, $nom, $prenom, $login, $mdp, $email, $adresse, $cp, $ville, $envoyer));
    }

}
