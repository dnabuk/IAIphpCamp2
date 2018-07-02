<html>
<body>
<?php 
	
	$litery = range("A", "T");	
	$liczba = range(0,19);
	echo "<br/>";
	//var_dump($camp);
	//print_r($litery);
	//print_r($liczba);
	echo "<table>";
	foreach($liczba as $klucz => $element)
	{
		echo "<tr>";
		foreach($litery as $k => $e)
		{
			echo "<td>";
			echo $element.$e;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>
</body>
</html>