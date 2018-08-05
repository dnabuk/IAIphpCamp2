<?php
	$item = array('name' => 'filiżanka', 'price' => 23);
	$item = json_encode($item);
	$curl=curl_init('http://localhost/phpcamp2/phpcamp/1_day3/4_day/task3.php/prodactlist/37');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
	curl_setopt($curl, CURLOPT_POSTFIELDS, $item);
	$result=curl_exec($curl);
	var_dump(json_decode($result,true));
	