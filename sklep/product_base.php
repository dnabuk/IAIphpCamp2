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
            throw new Exception("ERROR: Attempted setting unavailable/inaccessible variable");
        }
    }
    function __get($name){
        if(property_exists($this, $name)){
            return $this->$name;
        }
        else{
            throw new Exception("Propert doesn't exist or is inaccessible");
        }
    }
    
    
    

}