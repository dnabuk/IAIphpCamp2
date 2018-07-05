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

$method=$_SERVER['REQUEST_METHOD'];

//print_r($pathArray);

switch ($method){
  case 'GET':
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

echo json_encode($products);
