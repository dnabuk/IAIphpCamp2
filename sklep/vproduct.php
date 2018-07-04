<?php
require_once 'product_base.php';

class Vproduct extends Product_base{
    protected $link;
    protected $size;
    protected $key;
    
    function __construct($product_id, $price, $desc, $currency, $link, $size, $key){
        parent::__construct($product_id, $price, $desc, $currency);

        $this->link = $link;
        $this->size = $size;
        $this->key = $key;
    }
   

}


?>