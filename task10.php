<?php
	$tablica = array();
	$color1 = 'yellow';
	$color2 = 'brown';
		
	echo '<table style="border-collapse: collapse">';
	foreach (range(0, 19) as $col) {
		echo "<tr>";
		foreach (range('A', 'T') as $row => $val) {
			$tablica[$col][$row] = $col . $val;
			
			if (abs($col - $row) <= 10) {
				$color = $color1;
			}
			else {
				$color = $color2;
			}
						
			echo '<td style="width: 50px; height: 50px; border: 1px solid black; vertical-align: ';
			echo 'top; background-color: ' . $color . '">' . $tablica[$col][$row] . '</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
		
?>