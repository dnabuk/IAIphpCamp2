<?php
$camp = [1=>'Paweł','1'=>'Lica', 1.00=>'Bydgoszcz', true=>'Gniewko'];
var_dump($camp);
echo '<br>';
$camp[4]=null; 
array_push($camp, 'Kot ma Alę');
var_dump($camp);
echo '<br>';
unset($camp[5]);
var_dump($camp);
echo '<br>';
array_push($camp, 'Ala też zawsze ma zawsze \'jakieś ale\'');
var_dump($camp);
echo '<br>';
$tab = [1, 2, 3, 4, 5];
array_push($camp, $tab);
var_dump($camp);
