<?php

require_once "ProduktWirtualny.php";
require_once "Produkt.php";

$produkt = new Produkt();
$produkt->setNazwa("Kubek");
$produkt->setCena("29zł");
$produkt->setZdjecie("kubekczerwony.jpg");
$produkt->setKategoria("Kubki");
$produkt->setkolor("czerwony");
$produkt->setjakosc("OK");
$produkt->setWaga("1kg");

$produktWirtualny = new ProduktWirtualny();
$produktWirtualny->setNazwa("ksiazka");
$produktWirtualny->setCena("9zł");
$produktWirtualny->setKategoria("ebooki");
$produktWirtualny->setRozmiar("1gb");
$produktWirtualny->setRozszerzenie("pdf");
$produktWirtualny->setKlucz("312312");







/*
echo $produkt->getNazwa();
var_dump($produkt);
die('das');
*/