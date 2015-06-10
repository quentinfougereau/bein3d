<?php

class Application_Form_AjouterModifierProduit extends Zend_Form {

    public function init() {
        $this->setName('ajouterModifierProduit');

        $id = new Zend_Form_Element_Text('id');
        $id->setLabel('Identifiant')
                ->setRequired(true)
                ->addFilter('StripTags') //supprime les balises dans la chaîne
                ->addFilter('StringTrim'); //supprime les espaces en début et fin de chaîne
        
        $nom = new Zend_Form_Element_Text('nom');
        $nom->setLabel('Nom')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim');
        
        $prixunitaire = new Zend_Form_Element_Text('prixunitaire');
        $prixunitaire->setLabel('Prix Unitaire')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim');
        
        $idmaker = new Zend_Form_Element_Text('idmaker');//a revoir : mettre une liste déroulante car idmaker clé entrangère vers client
        $idmaker->setLabel('Id Maker')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim');
        
        $categorie = new Zend_Form_Element_Text('categorie');
        $categorie->setLabel('categorie')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim');
        
        $envoyer = new Zend_Form_Element_Submit('envoyer');
        $envoyer->setAttrib('id', 'boutonenvoyer');

        $this->addElements(array($id, $nom, $prixunitaire, $idmaker, $categorie, $envoyer));
        
    }

}
