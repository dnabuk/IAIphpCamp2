<?php
require_once('./klasy.php');
require_once('./klasy2.php');
require_once('./klasabaza.php');

//echo 'start!<br>';
$pierwszyObiekt = new Product(1,'Kubek', './img/kubeczek.jpg', '50 g', '10x50 cm','-trzyma cieplo' , 12, 'PLN');
echo $pierwszyObiekt->getPrice();
echo '<br>';
$pierwszyObiekt->setProduct(1,'Kubek', './img/kubeczek.jpg', '100 g', '15x55 cm','-trzyma cieplo' , 10, 'PLN');
echo $pierwszyObiekt->getPrice();
//var_dump($pierwszyObiekt);
$drugiObiekt = new VirtualProduct();
$drugiObiekt->setVirtualProduct(2,'Kubek na zimno', './img/kubeczek.jpg', '-trzyma cieplo <br> -fajne toto' , './pdf/attach.pdf', 'A453FB623C', '15 MB', 15, 'PLN');
//var_dump($pierwszyObiekt);
echo '<br>';
//echo $pierwszyObiekt->getBase();
try{
    $pierwszyObiekt->kot=3;
}catch(Exception $e){
    echo 'Znaleziono wyjatek: ',  $e->getMessage(), '<br>';
}
var_dump($pierwszyObiekt);

try{
    echo $pierwszyObiekt->photo;
}catch(Exception $e){
    echo 'Znaleziono wyjatek: ',  $e->getMessage(), '<br>';
}
var_dump($pierwszyObiekt);


var_dump(isset($weight));
var_dump(unset($weight));

//var_dump($drugiObiekt);
//die('<br>kończe skrypt<br>');
