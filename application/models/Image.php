<?php

require"ImageRow.php";

class Image extends Zend_Db_Table_Abstract {
    
    protected $_name = 'image';
    protected $_primary = 'id';
    
    protected $_rowClass = 'ImageRow';
    
    protected $_referenceMap=array(
        'MonProduit' =>array(
            'columns'=>'idprod',
            'refTableClass'=>'Produit',
            'refColumns'=>'id'           
        ));
}

