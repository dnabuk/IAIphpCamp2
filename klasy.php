<?php
include 'baseclass.php';
include 'produkty.php';
include 'vprodukt.php';



echo "<br />";

$obiektv= new vprodukt(1, 'nazwa', 'xxx', 'zdjecie', 'zalacznik', 'klucz', '10B');
$obiektprodukty= new produkty(2, 'produkt', 100, 10, 'opis', 'zdjeice', '100x100');

$bazowa= new baseclass();

$bazowa->setcena(2, 'produkt', 100, 'zlotowka ', ' opis ', ' zdjeice ');
//echo $bazowa->getcena() . 'test';

$obiekt= new produkty();


try {
	echo $obiekt->opis;
   $obiekt->nazwa='szklanka';
} catch (Exception $e) {
    var_dump($e);
}

try{ $obiekt->nonexistmethod(3);
	
}
catch(Exception $e){
	var_dump($e);
	
}
isset($obiekt->wagahfc);

//var_dump($obiekt);
die("<br /> <br />koncze skrypt ");
?>