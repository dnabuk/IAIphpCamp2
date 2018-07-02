<?php


$tablica = [
    1 => "Kacper",
    '1' => "Lisicki",
    1.99 => "Szczecin",
    true => "Gniewomir" ];

$tablica[4] = "";
var_dump($tablica);
$tablica[] = 'Kot ma Alę';
var_dump($tablica);
unset($tablica[5]);
var_dump($tablica);
$tablica[] = 'Ala też ma zawsze \'jakieś ale\'';
var_dump($tablica);
$tablica[] = [1, 2, 3, 4, 5];
var_dump($tablica);