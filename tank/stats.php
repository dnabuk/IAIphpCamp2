<?php
function showStats(){
	$ch = curl_init('http://tank.iai.ninja/api/get-current-board.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$tab = json_decode($result, true);
	echo '<p> Runda numer: '.$tab['turnNumber'].'<br></p>';
	echo '<p> Status: '.$tab['state'].'<br></p>';
	echo '<table><tr><th> Name:</th><th> Pkt: </th></p>';
	foreach($tab['players'] as $player){
		echo '<tr><td>'.$player['name'].'</td><td>'.$player['score'].'</td></tr>';
	}

}