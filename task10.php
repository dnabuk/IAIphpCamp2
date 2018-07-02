<?php
	$tablica = array();
	$color1 = 'yellow';
	$color2 = 'brown';
	
	$size = 20;
	
	echo '<table style="border-collapse: collapse">';
	foreach (range(0, $size-1) as $col) {
		echo "<tr>";
		foreach (range('A', chr($size-1+ord('A'))) as $row => $val) {
			$tablica[$col][$row] = $col . $val;
						
			if (abs($col - $row) <= $size/2) {
				if ($col + $row < $size/2 - 1 
				|| $col + $row >= $size*1.5) {
					$color = $color2;
				}
				else {
					$color = $color1;
				}
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