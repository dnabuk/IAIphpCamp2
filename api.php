<?php

$products=array(array('id'=>'1','nazwa'=>'jajka','cena'=>'4'),
				array('id'=>'2','nazwa'=>'mleko','cena'=>'2'));

$path=$_SERVER['REQUEST_URI'];
//var_dump($_SERVER);die;
$pathArray=explode('/',$path);
$kolekcja=$pathArray[3];
$nazwa=$pathArray[4];

$method=$_SERVER['REQUEST_METHOD'];

switch($method){
	case 'GET':
		if($kolekcja=='productsList'){
			foreach ($products as $produkt){
				if($produkt['nazwa']==$nazwa){
					var_dump($produkt);}
				}
			}
		break;
	case 'PUT':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'POST':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'DELETE':
		//
		break;
	default: break;
	}
echo json_encode($products);
?>