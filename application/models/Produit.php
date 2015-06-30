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
    protected $_dependentTables = array('Image');
    
    protected $_rowClass = 'ProduitRow';
   
    protected $_referenceMap=array(
        'MonMaker' =>array(
            'columns'=>'idmaker',
            'refTableClass'=>'Client',
            'refColumns'=>'Id'
            
        ));
    
    public function obtenirProduit($id){
        $row=$this->fetchRow("id='".$id."'");
        if(!$row){
            throw new Exception("Impossible de trouver le produit num : ".$id);
        }
        return $row;
    }
    
    public function obtenirImages($id){
        $row=$this->obtenirProduit($id);
        $images=$row->obtenirImages();
        return $images;
    }
    
    
    public function getproduit($id) {
        $sql = $this->_db->select();
        $sql->from('produit')
            ->where('id='.$id);
        $produit =$this->_db->fetchall($sql);
        return $produit;
    }
    public function getrechercher ($data){
        $sql= $this->_db->select();
        $sql->from('produit')
                ->where("nom LIKE '".$data."%'");
       $produit =$this->_db->fetchall($sql);
       return $produit;
    }
    
    public function modifierProduit($id, $nom, $prixunitaire, $idmaker, $categorie) {
        $data = array(
            'id' => $id,
            'nom' => $nom,
            'prixunitaire' => $prixunitaire,
            'idmaker' => $idmaker,
            'categorie' => $categorie
        );
        $this->update($data, "id = '" . $id . "'");
    }

    public function ajouterProduit($id, $nom, $prixunitaire, $idmaker, $categorie) {
        $data = array(
            'id' => $id,
            'nom' => $nom,
            'prixunitaire' => $prixunitaire,
            'idmaker' => $idmaker,
            'categorie' => $categorie
        );
        $this->insert($data);
    }

    public function supprimerProduit($id) {
        $this->delete("id = '" . $id . "'");
    }
    
    public function getIdMakers() {
        $sql = $this->_db->select()->distinct();
        $sql->from('produit', 'idmaker');
        $idMakers =$this->_db->fetchall($sql);
        return $idMakers;
    }
    
}
