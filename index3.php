<?php

$tablica = [
    1 => 'Hubert',
    '1' => 'Rządziński',
    1.99 => 'Dobra',
    true => 'Gniewomir',
    4 => '',
];
//$tablica;

var_dump($tablica);
echo '<br>';
$tablica[] = 'Kot ma Ale';
unset($tablica[5]);
$tablica[] = 'Ala tez ma zawsze jakies \'ale\'';
$tablica[] = [1,2,3,4,5];
var_dump($tablica);