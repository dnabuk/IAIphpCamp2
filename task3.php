<?php
$camp=[1 =>'Klara', '1'=>'Kucińska', 1.99 => 'Warszawa', true => 'Gniewko', 4 => 'cos innego'];
var_dump($camp);
echo '<br>';
array_push($camp, 'bardziej nowy element');
var_dump($camp);
echo '<br>';
unset($camp[5]);
array_push($camp, "Ala też ma zawsze 'jakiś ale");
var_dump($camp);
echo '<br>';
$tab=[1,2,3,4,5];
array_push($camp, $tab);
var_dump($camp);