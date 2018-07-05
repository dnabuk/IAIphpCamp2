<?php
	$item= 'name=mleko&cena=12';
	$curl=curl_init('http://localhost/phpcamp2/phpcamp/1_day3/4_day/task3.php/prodactlist');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
	curl_setopt($curl, CURLOPT_POSTFIELDS, $item);
	$result=curl_exec($curl);
	var_dump(json_decode($result,true));
	var_dump($result);