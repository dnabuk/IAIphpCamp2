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

}



class Params{

  protected $params = array();
  function __construct($array){
      $this->params = $array;
  }
}




?>