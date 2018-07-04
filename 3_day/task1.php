<?php
require_once 'Prodact_base.php';
require_once 'Prodact.php';
require_once 'Vprodact.php';

$prod = new Product;
$vprod = new Vproduct;
$prod->Setcena(1000);
$prod->Setwaga(10000000);
$prod->Setopis('Opis');
$prod->Setname('Kubeczek');

echo $prod->Getcena();

$vprod->Setcena(489);
$vprod->Setklucz('CXSIF-JSGFU-HSUUD-NFUKS');
$vprod->Setopis('Opis');
$prod->Setname('PHP Storm');

echo $vprod->Getcena();

var_dump($prod);
var_dump($vprod);
echo "bangla";
die();