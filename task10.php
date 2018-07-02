<?php
	$tablica = array();
	$color1 = 'style="background-color: yellow"';
	$color2 = 'style="background-color: brown"';
		
	echo "<table border=1>";
	foreach (range(1, 20) as $col) {
		echo "<tr>";
		foreach (range('A', 'T') as $row => $val) {
			$tablica[$col][$row] = $col . $val;
			
			if ($col > 20 - $row) {
				$color = $color2;
			}
			else {
				$color = $color1;
			}
						
			echo "<td " . $color . ">" . $tablica[$col][$row] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	
?>