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

class NewsController extends Zend_Controller_Action {

    public function init()
    {
        $this->view->acces='../../';
    }
    
    public function indexAction() {
        $news = new News();
        $this->view->news = $news->getNews();
        
    }

  

}
