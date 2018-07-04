<?php
require_once "ProductBase.php";
require_once "Product.php";
require_once "VirtualProduct.php";


$product1 = new Product();
$product1->setPrice(1000);
$product1->setName("Złoty latajacy kubek");
$product1->setPrice(40);
$product1->setId(1);
$product1->setColor("niebieski");
$product1->setHeight(13);
$product1->setWidth(12);
$product1->setWeight(0.8);
$product1->setDescription("Złoty latajacy kubek ze światłem");
echo '<pre>';
var_dump($product1);
echo '</pre>';


$product2 = new VirtualProduct();
$product2->testowe();

try{
    $product2->variable = 1;
}catch (Exception $exception){
    echo 'Caught exception: ', $exception->getMessage(), "\n";
}
echo '<pre>';
var_dump($product2);
echo '</pre>';
die('koncze');