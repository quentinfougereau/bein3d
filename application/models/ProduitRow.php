<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProduitRow
 *
 * @author Pierre
 */
class ProduitRow extends Zend_Db_Table_Row_Abstract{
   

    public function getMaker(){
        
    }

    public function obtenirImages(){
        $images=$this->findDependentRowset('Image');
        return $images;
    }
    
    public function obtenirFirstImage(){
        $images=$this->obtenirImages();
        $img=$images->current();
        return $img;
    }
    
    public function obtenirFirstImageId(){
        $images=$this->obtenirImages();
        $id=$images->current()->id;
        return $id;
    }
}
