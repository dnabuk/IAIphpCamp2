<?php
$camp= [
1=>'Krzysztof',
'1'=>'Margański',
1.99=>'Szczecin',
true=>'Gniewosz'
];

var_dump($camp);
$camp[4]='';
var_dump($camp);
$camp[]='Kot ma Alę';
unset($camp[4]);
var_dump($camp);
$camp[]='Ala też zawsze ma zawsze \'jakieś ale';
var_dump($camp);
$camp[]=array(1,2,3,4,5);
var_dump($camp);