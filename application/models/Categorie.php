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
require"CategorieRow.php";

class Categorie extends Zend_Db_Table_Abstract {
       
    //put your code here 
    protected $_name = 'categorie';
    protected $_primary = 'Id';
    protected $_dependentTables = array('Imagecat');
    
    protected $_rowClass = 'categorieRow';
   
    public function getcat() {
        $sql = $this->_db->select();
        $sql->from('categorie');
        $cat = $this->_db->fetchall($sql);
        return $cat;
    }
    public function getunecat($id){
        $row=$this->fetchRow("Id='".$id."'");
        if(!$row){
            throw new Exception("Impossible de trouver le produit num : ".$id);
        }
        return $row;
    }
    public function getimagecategorie($id){
        $ligne=$this->getunecat($id);
        
        $img=$ligne->obtenirImagescat();
        return $img;
    }
    
 
    
}
