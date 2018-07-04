<?php
/*
 * Zadanie z klas: operacje na produkcie - dzień 3
 *
 *
 */
require_once('klasy/products.inc.php');
require_once('klasy/virtualproducts.inc.php');

$product = new Products;
$vp = new VirtualProducts;

$vp->ustawProdukt(2,'Ebook PHP','foto.jpg','100','Fajny Ebook','wp.pl/zalacznik/','key10','100MB');
var_dump($vp);
echo '<br>';
$product->ustawProdukt(3,'Mleko','mleko.jpg','5','Smaczne mleko od krowy','10g','10x10');
//$product->a = 1;
var_dump($product);
$product->ustawCene(1000);
echo $product->pobierzCene();
$product->ustawCene(800);
echo $product->pobierzCene();
echo 'koniec<br>';
