<?php
	$camp = array();
	$camp[1] = "Marlena";
	$camp['1'] = "Adamczak";
	$camp[1.99] = "Poznań";
	$camp[true] = "Gniewomir";
	var_dump($camp);
	echo "<br>";
	$camp[4] = 4;
	var_dump($camp);
	echo "<br>";
	$camp[] = "Kot ma Alę";
	var_dump($camp);
	echo "<br>";
	unset($camp[5]);
	var_dump($camp);
	echo "<br>";
	$camp[] = "Ala też zawsze ma zawsze 'jakieś ale'";
	var_dump($camp);
	echo "<br>";
	$camp[] = array(1, 2, 3, 4, 5);
	var_dump($camp);
?>