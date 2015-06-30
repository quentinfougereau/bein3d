<?php
require_once '../application/models/Produit.php';
require_once '../application/models/Image.php';
require_once '../application/models/Client.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ShopController extends Zend_Controller_Action{
    
    public function init(){
        $layout=$this->_helper->layout();
        $layout->assign('menu','shop');
        $layout->assign('chemin','../');
    }
    
    public function indexAction(){
        Zend_Session::start();
    }
    
    public function boutiqueAction(){
        $layout=$this->_helper->layout();
        $layout->assign('chemin','../');
        
        $lesImagesProduits= new ArrayObject();
        $lesImagesProduits2= new ArrayObject();
        $p= new Produit();
        
        $lesProduits=$p->fetchAll();
        //pour chaque produit on recupère les images correspondante
        foreach ($lesProduits as $produit) {
            $id=$produit->id;
            $nom=$produit->nom;
            $nomchemin=$this->nomDossierImage($nom);
            $imagesProd=$p->obtenirImages($id);
            $lesImagesProduits->append($imagesProd);
            $lesImagesProduits2->append($nomchemin);
            
        }
        $this->view->chemins=$lesImagesProduits2;
        $this->view->lesImagesProduits=$lesImagesProduits;
        $this->view->lesProduits=$p->fetchall();
       
        
        
    }
    public function nouveautesAction(){
        
    }
    public function makersAction(){
        $produits= new Produit();
        $clients=new Client();
        $idMakers=$produits->getIdMakers();        
        $tabMakers=new ArrayObject();
        foreach ($idMakers as $tabId){
            foreach($tabId as $id){
                $tabMakers->append($clients->obtenirClient($id));
            }
            
        }
        $this->view->ids=$idMakers;
        $this->view->lesmakers=$tabMakers;
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
