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
unset($tablica[4]);
$tablica[] = 'Kot ma Ale';
$tablica[] = 'Ala tez ma zawsze jakies \'ale\'';
$tablica[] = $t = [1,2,3,4,5];
var_dump($tablica);