<?php

$licznik = 0;

echo '<table border = "1" cellpadding = "10" cellspacing = "0">';

foreach (range(0, 19) as $liczba) {

	echo "<tr>";
	foreach (range('A', 'T') as $litera)
	{
		$licznik = $licznik + 1;
		if ($licznik%2 == 0)
		{
			echo '<td>'.$liczba.$litera."</td>";
		}
		else
		{
			echo '<td bgcolor="#FF0000">'.$liczba.$litera."</td>";
		}
	}
	$licznik = $licznik + 1;
	echo "<tr/>";
}

?>