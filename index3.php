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
$tablica[] = [1, 2, 3, 4, 5];
var_dump($tablica);

//foreach tablica as klucz => wartosc

//$t1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
$t1 = range(0, 19);
$t2 = range('A', 'T');
var_dump($t1);
var_dump($t2);
//$t2 = ['A','B'];
echo '<br>';

foreach ($t1 as $t) {
    echo '<div style="">';
    $i = 1;
    $d = 1;
    foreach ($t2 as $tt) {

        echo '<div style="display: inline-block; background-color:red; width: 50px; height: 50px; border: solid 1px black;">';

        echo $t . $tt;
        echo '</div>';
    }
    echo '</div>';
}
