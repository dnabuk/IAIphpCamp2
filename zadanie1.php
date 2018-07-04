<?php
	include("connect.php");
	$zap="select name, surname, gender from clients limit 5";
	// mysqli_fetch_row
	$wynik=mysqli_query($link,$zap);
	echo "<table>";
	while($wiersz=mysqli_fetch_row($wynik)){
		echo "<tr>";
		for($i=0;$i<count($wiersz);$i++){
				$tabela=explode(" ",$wiersz[$i]);
				for($j=0;$j<count($tabela);$j++){
				echo "<td>";
				print $tabela[$j];
				echo "</td>";}
				}
				echo "</tr>";
				}
	echo "</table>";
	echo "<br/><br/>";
	//mysqli_fetch_assoc
	$wynik=mysqli_query($link,$zap);
	while($k=mysqli_fetch_assoc($wynik)){
		echo $k['name']." ".$k['surname']." ".$k['gender']."<br/>";
		}
	
?>