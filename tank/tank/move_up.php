<?php 

	function move($key,$dir,$dist,$fire)
	{
	$curl=curl_init('http://tank.iai.ninja/api/make-move.php?key='.$key.'&direction='.$dir.'&distance='.$dist.'&fire='.$fire);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $item);
	$result=curl_exec($curl);
	var_dump(json_decode($result,true));
	$dane=json_decode($result,true);
	var_dump('http://tank.iai.ninja/api/make-move.php?key='.$key.'&direction='.$dir.'&distance='.$dist.'&fire='.$fire);
	}
	