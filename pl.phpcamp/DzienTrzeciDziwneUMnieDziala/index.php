<?php
require_once "Product.php";
require_once "VirtualProduct.php";

$product1 = new Product();
$product1-> a = 1;
$product1->setPrice(1000);
$product1->setName("Złoty latajacy kubek");
echo '<pre>';
var_dump($product1);
echo '</pre>';
echo $product1->getName() . '<br>';
echo $product1->getPrice() . '<br>';
die('koncze');