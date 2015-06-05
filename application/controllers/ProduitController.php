<?php

/**
 * Description of ProduitController
 *
 * @author JimSobieski
 */

require_once '../application/models/Produit.php';

class ProduitController extends Zend_Controller_Action {
    
    public function init() {
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
    }
    
    
}
