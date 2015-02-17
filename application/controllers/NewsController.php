<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Pierre
 */
require_once '../application/models/News.php';
class NewsController  extends Zend_Controller_Action  {
    //put your code here
    public function indexAction() {
        $news=new News();
        
        if(!isset($_GET['id'])){
            $this->view->news=$news->fetchall();
           
        }else{
            foreach($news->fetchall() as $news){
                if($news->id>$_GET['id']){
                    $this->views->news=$news;
                }else{
                    $this->views->news=null;
                }
            };
        }
        
    }
}
