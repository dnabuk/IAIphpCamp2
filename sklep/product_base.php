<?php
class Product_base{
    public $product_id;
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
    
    function __set($name, $value){
        if(property_exists($this, $name)){
            $this->$name = $value;
        }else{
            throw new Exception("Has anyone really been far even as decided to go even want to do more like?");
        }
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