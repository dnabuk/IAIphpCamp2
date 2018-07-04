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
   
    public function set_link($link){
        $this->link = $link;
    }
    public function set_size($size){
        $this->size = $size;
    }
    public function set_key($key){
        $this->key = $key;
    }
    
   
    public function get_link(){
        return $this->link;
    }
    public function get_size(){
        return $this->size;
    }
    public function get_key(){
        return $this->key;
    }
}


?>