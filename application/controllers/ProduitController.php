<?php

/**
 * Description of ProduitController
 *
 * @author JimSobieski
 */

require_once '../application/models/Produit.php';
require_once '../application/models/Image.php';

class ProduitController extends Zend_Controller_Action {
    
    public function init() {
        $layout=$this->_helper->layout();
        $layout->assign('menu','produit');
        $layout->assign('chemin','../');
    }
    
    public function unproduitAction(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../../../');
        $p=new Produit();
        $id=$this->_getParam('id',0);
        $row=$p->obtenirProduit($id);
        $this->view->produit=$row;
        $this->view->nomdossier=$this->nomDossierImage($row->nom);
    }
    
    public function nomDossierImage($nom){
        $filter = new Zend_Filter_StringTrim(' ');
        $espace=$filter->filter($nom);
        $filter = new Zend_Filter_StringToLower();
        $minim= $filter->filter($espace);
        $nomfinal = str_replace(' ', '', $minim);
        return $nomfinal;
    }
    
    
}
