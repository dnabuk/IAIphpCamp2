<?php
$tablica1 = range(0,19);
$tablica2 = range("A", "T");
echo '<table border="1" width="100%" height="100%">';
foreach($tablica1 as $key1 => $value1)
{
	echo '<tr>';
	foreach($tablica2 as $key2 => $value2)
	{
		if(($key1%2 == 0 && $key2%2 == 0) || ($key1%2 == 1 && $key2%2 == 1))
		{
			echo '<td bgcolor="#7f0000">';
			echo $value1.$value2.' ';
			echo '</td>';
		}
		else
		{
			echo '<td bgcolor="#ffff00">';
			echo $value1.$value2.' ';
			echo '</td>';
		}
	}
	echo '</tr>';
}
echo '<br/>';
?>