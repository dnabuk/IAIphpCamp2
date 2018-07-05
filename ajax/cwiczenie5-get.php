<?php
	$ch = curl_init('http://localhost/iai/03/ajax/api-cwiczenie5.php/productslist/');
		
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$response = json_decode($result, true);
	print_r($response);
?>