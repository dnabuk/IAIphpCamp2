<?php

echo '<table border = 1px>';
foreach (range(0,19) as $row) {

	echo "<tr>";

	foreach (range('A','T') as $col) {

			echo "<td>";
			echo $row.$col;
			echo "</td>";

		}

	echo "</tr>";

	}

echo "</table>";



?>