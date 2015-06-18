<?php

require"ImagecatRow.php";

class Imagecat extends Zend_Db_Table_Abstract {
    
    protected $_name = 'imagecat';
    protected $_primary = 'id';
    
    protected $_rowClass = 'ImagecatRow';
    
    protected $_referenceMap=array(
        'Macategorie' =>array(
            'columns'=>'idcat',
            'refTableClass'=>'Categorie',
            'refColumns'=>'Id'           
        ));
}

