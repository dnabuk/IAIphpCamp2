<?php

	$ch = curl_init('http://localhost/phpcamp/Day4/tablica.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);

	$response = json_decode($result, true);

	var_dump($response);
	
?>