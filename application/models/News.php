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
include('NewsRow.php');
class News extends Zend_Db_Table_Abstract {

    //put your code here 
    protected $_name = 'News';
    protected $_primary = 'id';
    protected $_rowClass = 'NewsRow';
 

}
