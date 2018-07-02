<?php
	$tablica = array();
	$color1 = 'style="background-color: yellow"';
	$color2 = 'style="background-color: brown"';
		
	echo "<table border=1>";
	foreach (range(1, 20) as $col) {
		echo "<tr>";
		foreach (range('A', 'T') as $row => $val) {
			$tablica[$col][$row] = $col . $val;
			/*if (($col + $row) % 2 == 0) {
				$color = $color1;
			}
			else {
				$color = $color2;
			}*/
			if () {
				
			}
						
			echo "<td " . $color . ">" . $tablica[$col][$row] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	
?>