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
include('CommentaireRow.php');

class Commentaire extends Zend_Db_Table_Abstract {

    //put your code here 
    protected $_name = 'Commentaire';
    protected $_primary = 'id';
    protected $_rowClass = 'CommentaireRow';
   

    

   
    

}
