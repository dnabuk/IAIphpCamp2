<?php
	$tablica = array();
	
	echo "<table border=1>";
	foreach (range(1, 20) as $col) {
		echo "<tr>";
		foreach (range('A', 'T') as $row => $val) {
			$tablica[$col][$row] = $col . $val;
			echo "<td>" . $tablica[$col][$row] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	
?>