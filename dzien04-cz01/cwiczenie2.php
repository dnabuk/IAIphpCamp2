<?php
	$ch = curl_init('http://localhost/iai/03/dzien04-cz01/cwiczenie1.php?action=addProduct&name=Lodowka&product=6&price=1999');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo '<pre>';
	print_r(json_decode($result));
	echo '</pre>';
?>