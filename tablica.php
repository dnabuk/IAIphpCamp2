<?php
$camp= [
    1 => 'Kamil',
    '1' => 'Spirydowicz',
    1.99 => 'Police',
    true => 'Gniewomir',

    
];

$camp[4] = "";
var_dump($camp);
$camp[] = 'Kot ma Alę';
var_dump($camp);
unset($camp[5]);
var_dump($camp);
$camp[] = 'Ala też zawsze ma \'jakieś ale\'';
var_dump($camp);
$camp[] = [1,2,3,4,5];

var_dump($camp);


?>