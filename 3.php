<?php

$tablica = array (
	1 => "Jakub",
	'1' => "Dziedzic",
	1.99 => "Nowogard",
	TRUE => "Gniewomir",
);

var_dump($tablica);

$tablica[4] = "";
var_dump($tablica);

$tablica[] = "Kot ma ale";
var_dump($tablica);

unset($tablica[5]);
var_dump($tablica);

$tablica[] = "Ala tez zawsze ma zawsze jakies ale";
var_dump($tablica);

$tablica[] = array(range(1,5));
var_dump($tablica);

?>