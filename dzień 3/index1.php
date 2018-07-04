<?php
require_once('Product.php');
require_once('ProductVirtual.php');

$product = new Product();
echo $product->getProductName();
$product->setProductName('Masło kakaowe');
echo $product->getProductName();
var_dump($product);


$productvirtual = new ProductVirtual();
echo $productvirtual->getProductVirtualName();
$productvirtual->setProductVirtualName('Ebook');
echo $productvirtual->getProductVirtualName();

var_dump($product);
die('doszedlem do konca<br/>');
