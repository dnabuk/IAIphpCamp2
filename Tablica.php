<?php
$camp = [
    1 => 'Michał',
    '1' => 'Zakrzewski',
    1.99 => 'Szczecin',
    true => 'Gniewomir',
];
echo '<br>';
$camp[4] = '';
var_dump($camp);
echo '<br>';
$camp[] = 'Kot ma Alę';
var_dump($camp);
echo '<br>';
unset($camp[5]);
var_dump($camp);
echo '<br>';
$camp[] = 'Ala też zawsze ma zawsze \'jakieś ale\'';
var_dump($camp);
echo '<br>';
$camp[] = [1,2,3,4,5];
echo '<br>';
var_dump($camp);
echo '<br>';