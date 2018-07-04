<?php
include_once 'product_base.php';
class Product extends Product_base{

    protected $params;
    protected $img;
    
    function __construct($product_id, $price, $desc, $currency, $params, $img){
        parent::__construct($product_id, $price, $desc, $currency);
        $this->params = $params;
        $this->img = $img;
    }
    function __destruct(){
        echo "removed";
    }
    public function set_params($params){
        $this->params = $params;
    }
    public function set_img($img){
        $this->img = $img;
    }
    
    
    public function get_params(){
        return $this->params;
    }
    public function get_img(){
        return $this->img;
    }
}



class Params{

  protected $params = array();
  function __construct($array){
      $this->params = $array;
  }
}




?>