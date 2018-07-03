<?php

echo '<table>';
foreach (range(0,19) as $row) {

	echo "<tr>";

	foreach (range('A','T') as $col) {

			echo "<td>";
			echo '<div style="display: inline-block; width: 50px; height: 50px; border: solid 1px black;">'.$row.$col.'</div>';
			echo "</td>";

		}

	echo "</tr>";

	}

echo "</table>";



?>