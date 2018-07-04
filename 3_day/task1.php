<?php
require_once 'prodact.php';
require_once 'vprodact.php';
$prod = new Product;
$vprod = new Vproduct;
$prod->Setcena(1000);
$prod->Setwaga(10000000);
echo $prod->Getcena();
var_dump($prod);
var_dump($vprod);
echo "bangla";
die();