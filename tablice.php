<?php 
	$camp[1]="Michał";
	$camp['1']="Obielak";
	$camp[1.99]="Gryfino";
	$camp[true]="Gniewko";
	var_dump($camp);
	echo "<br/>";
	$camp[4]="wartosc";
	var_dump($camp);
	echo "<br/>";
	$camp[5]='Kot ma Alę';
	var_dump($camp);
	echo "<br/>";
	unset($camp[4]);
	var_dump($camp);
	echo "<br/>";
	$camp[6]='Ala też zawsze ma zawsze &prime;jakieś ale&prime;';
	var_dump($camp);
	echo "<br/>";
	$camp[7]=array(1,2,3,4,5);
	var_dump($camp);
	echo "<br/>";
?>