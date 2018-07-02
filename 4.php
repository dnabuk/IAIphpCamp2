<?php
echo '<table border="1" cellpadding="15" cellspacing="0">';
foreach(range(0,19) as $r){
	$cc=0;
	echo '<tr>';
	foreach(range('A','T') as $c){
		$tablica[$r][$c] = $r.$c;
		if (($r+$cc) % 2 == 0)
			echo '<td style="background-color: red; width: 50px; height:50px" >';
		else
			echo '<td style="background-color: yellow; width: 50px; height:50px">';
		echo $tablica[$r][$c];
		echo '</td>';
		$cc=$cc+1;
	}
	echo '</tr>';
}
echo '</table>';

?>