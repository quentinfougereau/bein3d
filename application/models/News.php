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
    static $db = "";

    public function News() {
        $params = array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'projet0'
        );
        try {
            News::$db = Zend_Db::factory('PDO_MYSQL', $params);
            News::$db->getConnection();
        } catch (Zend_Db_Adapter_Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getNews() {
       
        
        $sql = News::$db->select();
        $sql->from('news')
            ->order('id DESC');
        $news = News::$db->fetchall($sql);
        return $news;
    }
    public function getLastNews($id) {
       
        
        $sql = News::$db->select();
        $sql->from('news')
            ->where('id>'.$id)
            ->limit(1);
        $news = News::$db->fetchall($sql);
        return $news;
    }
    

}
