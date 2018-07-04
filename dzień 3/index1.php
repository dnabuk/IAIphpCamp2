<?php
require_once('ProductBase.php');
require_once('Product.php');
require_once('ProductVirtual.php');

$product = new Product();
echo $product->__get('ProductName').'<br/>';
$product->__set('ProductName', 'Masło kakaowe');
echo $product->__get('ProductName').'<br/>';

var_dump($product);


$product = new ProductVirtual();
echo $product->__getV('ProductFilesize').'<br/>';
$product->__setV('ProductFilesize', '9999');
echo $product->__getV('ProductFilesize').'<br/>';

var_dump($product);
die('doszedlem do konca<br/>');
