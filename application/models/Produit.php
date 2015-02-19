<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnexionModel
 *
 * @author Pierre
 */
require"ProduitRow.php";

class Produit extends Zend_Db_Table_Abstract {
       
    //put your code here 
    protected $_name = 'produit';
    protected $_primary = 'id';
    protected $_rowClass = 'ProduitRow';
   
    protected $_referenceMap=array(
        'MonMaker' =>array(
            'columns'=>'idmaker',
            'refTableClass'=>'Client',
            'refColumns'=>'Id'
            
        ));
    

    
    
    public function getproduit($id) {
        
        $sql = $this->_db->select();
        $sql->from('produit')
            ->where('id='.$id);
        $produit =$this->_db->fetchall($sql);
        return $produit;
    }
    
    
}
