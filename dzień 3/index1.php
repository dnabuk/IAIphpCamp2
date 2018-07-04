<?php
require_once('ProductBase.php');
require_once('ProductVirtual.php');

$product = new ProductBase();
echo $product->__get('ProductName').'<br/>';
$product->__set('ProductName', 'Masło kakaowe');
echo $product->__get('ProductName').'<br/>';

var_dump($product);


$product = new ProductVirtual();
echo $product->__get('ProductFilesize').'<br/>';
$product->__set('ProductFilesize', '9999');
echo $product->__get('ProductFilesize').'<br/>';

echo $product->__get('ProductName').'<br/>';
$product->__set('ProductName', 'Masło kakaowe');
echo $product->__get('ProductName').'<br/>';

echo $product->__get('ProductDownloadLink').'<br/>';
$product->__set('ProductDownloadLink', '99.99');
echo $product->__get('ProductDownloadLink').'<br/>';

var_dump($product);
die('doszedlem do konca<br/>');
