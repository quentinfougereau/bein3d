<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategorieRow
 *
 * @author Pierre
 */
class CategorieRow extends Zend_Db_Table_Row_Abstract{
   

    public function getMaker(){
        
    }

    public function obtenirImagescat(){
        $images=$this->findDependentRowset('Imagecat');
        return $images;
    }
    
    public function obtenirFirstImageId(){
        $images=$this->obtenirImagescat();
        $id=$images->current()->id;
        return $id;
    }
}
