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
   

    

    public function getNews() {
        $sql = $this->_db->select();
        $sql->from('news')
            ->order('id DESC');
        $news = $this->_db->fetchall($sql);
        return $news;
    }
    public function getLastNews($id) {
       
        
        $sql = $this->_db->select();
        $sql->from('news')
            ->where('id>'.$id)
            ->limit(1);
        $news = $this->_db->fetchall($sql);
        return $news;
    }
    public function getLast5News() {
        $sql = $this->_db->select();
        $sql->from('news')
           ->order('id DESC')
            ->limit(10);
        $news = $this->_db->fetchall($sql);
        return $news;
    }
    public function getrechercher ($data){
        $sql= $this->_db->select();
        $sql->from('news')
                ->where('sujet LIKE '.$data.'%');
    }
    

}
