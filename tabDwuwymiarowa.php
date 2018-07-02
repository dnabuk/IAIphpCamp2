<?php

echo '<table border = "1" cellpadding = "10" cellspacing = "0">';
foreach (range(0, 19) as $liczba) {

	echo "<tr>";
	foreach (range('A', 'T') as $litera)
	{
		echo "<td>".$liczba.$litera."</td>";
	}
	echo "<tr/>";
}

?>