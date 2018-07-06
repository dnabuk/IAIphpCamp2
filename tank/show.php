<?php
require_once("letters.php");

function showGame(){
	$ch = curl_init('http://tank.iai.ninja/api/get-current-board.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);

	$tab = json_decode($result, true);
	$size = $tab['settings']['boardSize'];
	$plansza=$tab['board'];
	if(!isset($plansza)){
		echo 'Nie ma aktywnej gry';
	}
	$alphabet = createColumnsArray('ZZ');
	
	echo '<br><table class="tab_mapa">';
	for ($i=1; $i<=$size; $i++){
		echo '<tr>';
		for ($j=1; $j<=$size; $j++){
			$p = $alphabet[$j-1].$i;
			foreach ($plansza as $pole){
				if($pole['position']==$p){
					switch($pole['type']){
						case 'missile': $type='missile'; break;
						case 'player': 
							if((isset($pole['name'])) && ($pole['name']==$_GET['nazwa'])){
								$type = 'naszCzolg';
							} else{
								$type='player'; 
							}
						break;
						case 'player_base': 
							if((isset($pole['name'])) && ($pole['name']==$_GET['nazwa'])){
								$type = 'naszaBaza';
							} else{
								$type='player_base'; 
							}
						break;
						case 'obstacle': $type='obstacle'; break;
						default: $type='empty';
					}
					echo '<td id='.$p.' class='.$type.'></td>';
				}
			}
		}
		echo '</tr>';
		
	}
	echo '</table>';
}