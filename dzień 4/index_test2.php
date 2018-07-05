<?php

	$ch = curl_init('http://localhost/dzie%C5%84%204/index2.php/getProduct/7');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$result = json_decode($result);
	curl_close($ch);
	print_r($result);

	
	$post = [
			'name' => 'user1',
			'price' => rand(1, 1000)
	];	
	$data = json_encode($post);
	
	$ch = curl_init('http://localhost/dzie%C5%84%204/index2.php/addProduct');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = curl_exec($ch);
	print_r($result);
	$result = json_decode($result);
	curl_close($ch);
	print_r($result);
	