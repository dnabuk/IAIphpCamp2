<?php
$tablica1 = range(0,19);
$tablica2 = range("A", "T");
echo '<table border="1">';
foreach($tablica1 as $key1 => $value1)
{
	echo '<tr>';
	foreach($tablica2 as $key2 => $value2)
	{
		echo '<td>';
		echo $value1.$value2.' ';
		echo '</td>';
	}
	echo '</tr>';
}
echo '<br/>';
?>