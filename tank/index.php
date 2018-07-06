<head>
<link rel="Stylesheet" type="text/css" href="style.css"/>
</head>

<?php
require_once("letters.php");
$ch = curl_init('http://tank.iai.ninja/api/get-current-board.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$tab = json_decode($result, true);
$size = $tab['settings']['boardSize'];

$plansza=$tab['board'];
if (!isset($plansza)){
	echo'Brak aktywnej gry'; 
	die;
}
//Przygotowuje dużą tablicę znaków A, B, C, ..., AA, AB, AC, ..., BA, BB, ..., ZZ
$alphabet = createColumnsArray('ZZ');

echo '<table>';
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
?>