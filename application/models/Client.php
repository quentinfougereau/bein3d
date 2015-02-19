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
class Client extends Zend_Db_Table_Abstract {

    //put your code here 
    protected $_name = 'client';
    protected $_primary = 'Id';
    protected $_sequence = false;
//    protected $_rowClass = 'ClientRow';
 
    
    public function inscription($tabclient){
        $this->insert($tabclient,'client');
    }
    
//    public function unClient($id){
//        return $this->select->where('Id='.$id);
//    }
}
