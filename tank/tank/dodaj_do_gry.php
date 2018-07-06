<?php 
require_once 'connect.php';
//http://tank.iai.ninja/api/join-current-game.php
//$item = array('name' => 'filiżanka', 'price' => 23);
	//$item = json_encode($item);
	$curl=curl_init('http://tank.iai.ninja/api/join-current-game.php?name=grupa_3');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $item);
	$result=curl_exec($curl);
	var_dump(json_decode($result,true));
	$dane=json_decode($result,true);

	$id=$dane['data']['id'];
	$key=$dane['data']['key'];
	$query_ins="UPDATE `tank` set id_='$id',k_ey='$key' WHERE id = 1";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{}