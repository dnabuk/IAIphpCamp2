<?php
require_once('Product.php');
require_once('ProductVirtual.php');

$product = new Product();
echo $product->__get('ProductName').'<br/>';
$product->__set('ProductName', 'Masło kakaowe');
echo $product->__get('ProductName').'<br/>';

var_dump($product);


$product = new ProductVirtual();
echo $product->__get('ProductVirtualName').'<br/>';
$product->__set('ProductVirtualName', 'Ebook 123');
echo $product->__get('ProductVirtualName').'<br/>';

var_dump($product);
die('doszedlem do konca<br/>');
