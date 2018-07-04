<?php
include_once "wlasciwosci.php";
include_once "klasy.php";
include_once "product.php";



$pierwszyobiekt = new produkt;
echo 'koniec';

//$pierwszyobiekt->set_cena(50);
//$pierwszyobiekt->set_waluta('pln');


var_dump($pierwszyobiekt);
//$pierwszyobiekt-> a=1;
var_dump($pierwszyobiekt);



$drugiobiekt = new produkt2;
echo 'koniec';

//$drugiobiekt->set_cena(30);
//$drugiobiekt->set_waluta('pln');

try {
var_dump($drugiobiekt);
$drugiobiekt-> a=1;
$drugiobiekt->test;

//$drugiobiekt -> set_klucz(4333555);

//$drugiobiekt -> set_rozmiar(65);
//$drugiobiekt -> set_opis('coś');
$drugiobiekt->a=1;
var_dump($drugiobiekt);


    $product->a = 'test';
} catch(Exception $a){
    var_dump($a);
}

die('koniec skryptu');
