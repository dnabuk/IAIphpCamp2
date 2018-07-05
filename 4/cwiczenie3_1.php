<?php

$products = array(
  array('id'=>01,'nazwa'=>'komputer','cena'=>3000.00),
  array('id'=>02,'nazwa'=>'myszka','cena'=>50.00),
  array('id'=>03,'nazwa'=>'podkladka','cena'=>25.00),
  array('id'=>04,'nazwa'=>'zasilacz','cena'=>150.00),
  array('id'=>05,'nazwa'=>'drukarka','cena'=>550.00),
);

$path=$_SERVER['PATH_INFO'];
$pathArray=explode('/',$path);
$kolekcja=$pathArray[1];
$nazwa=$pathArray[2];
$method=$_SERVER['REQUEST_METHOD'];
$result='';
//var_dump($_SERVER['PATH_INFO']);

switch ($method){
  case 'GET':
if( $kolekcja=='products'){
  foreach( $products as $product ){
    if($product['nazwa']==$nazwa){
      $result=json_encode($product);
    }
  }
}

  //zwrotka na podsstawie tablicy $pathArray
  break;
  case 'PUT':
  $params=json_decode(file_get_contents('php://input'),1);//przekazane dane postem
  break;
  case 'POST':
  $params=json_decode(file_get_contents('php://input'),1);//przekazane dane postem, aktualizowanie danych
  break;
  case 'DELETE':
  //usunac konkretny zasob na podstawie $pathArray
  default:

}

echo $result;
