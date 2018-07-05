<?php

$products = array
  (
	array (
		'id' => "1",
		'nazwa' => "kubek",
		'cena' => "10",
	),
	array (
		'id' => "2",
		'nazwa' => "rower",
		'cena' => "20",
	),
	array (
		'id' => "3",
		'nazwa' => "krzeslo",
		'cena' => "30",
	),
	array (
		'id' => "4",
		'nazwa' => "mysz",
		'cena' => "40",
	),
	array (
		'id' => "5",
		'nazwa' => "klawiatura",
		'cena' => "50",
	)
  );

$path = $_SERVER['PATH_INFO'];
$_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
	case 'GET':
	print_r($pathArray[0]);
		if($pathArray[1] == 'productsList'){
			foreach ($products as $product) {
				if($product['nazwa'] === $pathArray[2]){
				break;
		}
	}
	$result = $product;
	echo(json_encode($result));

}
	break;

	case 'PUT':
		$params = json_decode(file_get_contents('php://input'), 1);
	break;

	case 'POST':
		$params = json_decode(file_get_contents('php://inut'), 1);
		break;

	case 'DELETE':

	default:
}

//echo json_encode($products);