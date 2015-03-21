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

    //put your code here
    public function indexAction() {
        $news = new News();
        $this->view->news = $news->getNews();
    }

  

}
