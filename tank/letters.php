<?php
function createColumnsArray($end_column, $first_letters = ''){
	$columns = array();
	$length = strlen($end_column);
	$letters = range('A', 'Z');

	foreach ($letters as $letter) {
		$column = $first_letters . $letter;

		$columns[] = $column;

		if ($column == $end_column) return $columns;
	}

	foreach ($columns as $column) {
		if (!in_array($end_column, $columns) && strlen($column) < $length) {
			$new_columns = createColumnsArray($end_column, $column);
			$columns = array_merge($columns, $new_columns);
		}
	}

	return $columns;
}

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
	echo '<p> Runda numer: '.$tab['turnNumber'].'<br></p>';
	echo '<p> Status: '.$tab['state'].'<br></p>';
	echo '<p> Name:     Pkt: <br></p>';
	foreach($tab['players'] as $player){
		echo ' '.$player['name'].' '.$player['score'].'<br>';
	}

	echo '<br><table>';
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
					echo '<td id='.$p.' class='.$type.'>&nbsp;</td>';
				}
			}
		}
		echo '</tr>';
		
	}
	echo '</table>';
}