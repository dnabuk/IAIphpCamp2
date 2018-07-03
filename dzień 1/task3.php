<?php
$camp = array(
	1 => 'Piotr',
	'1' => 'Żerański',
	1.99 => 'Nie pije:)',
	true => 'Gniewomir'
);
$camp[4] = 'Nowy element';
var_dump($camp);
$camp[] = 'Kot ma Alę';
var_dump($camp);
unset($camp[5]);
var_dump($camp);
$camp[] = 'Ala też zawsze ma zawsze \'jakieś ale\'';
var_dump($camp);
$camp[] = array(range(1,5));
var_dump($camp);
?>