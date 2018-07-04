<?php
require_once 'Prodact_base.php';
require_once 'Prodact.php';
require_once 'Vprodact.php';

$prod = new Product;
$vprod = new Vproduct;
try{
$vprod->a=1;

}catch(Exception $e){
	var_dump($e);
}
$prod->cena=1000;
$vprod->cena=134;
$vprod->Setwaga(10000000);
//$prod->Setopis('Opis');
//$prod->Setname('Kubeczek');

//echo $prod->Getcena();

//$vprod->Set('cena',450);
//$vprod->Setklucz('CXSIF-JSGFU-HSUUD-NFUKS');
//$vprod->Setopis('Opis');
//$vprod->Setname('PHP Storm');

//echo $vprod->Getcenavat();

var_dump($prod);
var_dump($vprod);
echo $prod->cena;
echo $vprod->cena;
echo "bangla";
//die();