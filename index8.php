<?php
include('klasy/products.inc.php');
include('klasy/virtualproducts.inc.php');

$product = new Product;
$product->a = 1;
var_dump($product);
$product->ustawCene(1000);
echo $product->pobierzCene();
$product->ustawCene(800);

echo $product->pobierzCene();
echo 'koniec<br>';

//var_dump($product);
//var_dump($product);
//echo $product->dodajProdukt(23,'dd','dd','dd','ddd');
