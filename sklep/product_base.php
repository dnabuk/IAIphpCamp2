<?php
class Product_base{
    protected $product_id;
    protected $price;
    protected $desc;
    protected $currency;

    
    function __construct($product_id, $price, $desc, $currency){
        $this->product_id = $product_id;
        $this->price = $price;
        $this->desc = $desc;
        $this->currency = $currency;
        echo "test";
    }
    function __destruct(){
        echo "removed";
    }
    public function set_price($price){
        $this->price = $price;
    }
    public function set_id($id){
        $this->product_id = $id;
    }
    public function set_desc($desc){
        $this->desc = $desc;
    }
    public function set_currency($currency){
        $this->currency = $currency;
    }

    
    
    
    public function get_price(){
        return $this->price;
    }
    public function get_id(){
        return $this->product_id;
    }
    public function get_desc(){
        return $this->desc;
    }
    public function get_currency(){
        return $this->currency;
    }

}