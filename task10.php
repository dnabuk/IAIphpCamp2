<?php
$tablica1 = range(0,19);
$tablica2 = range("A", "T");
echo '<table border="1" width="75%" height="100%">';
$i=0;
foreach($tablica1 as $key1 => $value1)
{
	echo '<tr>';
	foreach($tablica2 as $key2 => $value2)
	{
		if($key2 <= $i)
		{
			echo '<td bgcolor="#ffff00">';
			echo $value1.$value2;
			echo '</td>';
		}
		else
		{
			echo '<td bgcolor="#7f0000">';
			echo $value1.$value2;
			echo '</td>';
		}
	}
	$i++;
	echo '</tr>';
}
echo '<br/>';
?>