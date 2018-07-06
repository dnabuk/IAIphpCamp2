<?php

$curl=curl_init('http://tank.iai.ninja/api/get-current-board.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $item);
	$result=curl_exec($curl);
	//var_dump(json_decode($result,true));
	$dane=json_decode($result,true);
require_once 'connect.php';
//http://tank.iai.ninja/api/join-current-game.php
//$item = array('name' => 'filiżanka', 'price' => 23);
	//$item = json_encode($item);

$query="SELECT * from `tank` WHERE id=1";
				if($result= mysqli_query($link,$query)){
					if (mysqli_num_rows($result)==0) {
						
					}
					while ($data= mysqli_fetch_assoc($result)) {
						$key=$data['k_ey'];

					}}
					echo $key;

	
require_once 'move_up.php';
var_dump($target);
var_dump($my_postion);


foreach ($num as $key2 => $value) {
	//echo move($key,'w',1,0);
	//sleep(1.2);
}
$i=0;
while ( <= 10) {
	$i++;
	switch ($_GET['']) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
echo move($key,'w',1,0);
}
