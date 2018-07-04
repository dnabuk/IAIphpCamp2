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
//$prod->Setcena(1000);
//$prod->Setwaga(10000000);
//$prod->Setopis('Opis');
//$prod->Setname('Kubeczek');

//echo $prod->Getcena();

//$vprod->Set('cena',450);
//$vprod->Setklucz('CXSIF-JSGFU-HSUUD-NFUKS');
//$vprod->Setopis('Opis');
//$vprod->Setname('PHP Storm');

//echo $vprod->Getcena();

var_dump($prod);
var_dump($vprod);
//echo $vprod->cena;
echo "bangla";
//die();