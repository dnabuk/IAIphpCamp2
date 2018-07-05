<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

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

//var_dump($products);

$action = $_GET['action'];
$id = $_GET['id'];
$nazwa = $_GET['nazwa'];
$cena = $_GET['cena'];


if($action === "checkProduct"){
	foreach ($products as $product) {
		if($product['nazwa'] === $nazwa){
			break;
		}
	}
	echo json_encode($product);

}
elseif($action === 'addProduct'){
	$products[] = array (
		'id' => $id,
		'cena' => $cena,
		'nazwa' => $nazwa,
	);
	$result = $products;
}
elseif($action === 'removeProduct'){
	foreach ($products as $index=>$product) {
			if($product['id'] == $id){
					unset($products[$index]);
					break;
			}
		}
		$result=$products;
}
else{
	$result=$products;
}
//echo '<pre>';
echo(json_encode($result));
//var_dump($result);
//echo '</pre>';