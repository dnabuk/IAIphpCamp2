<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8" />
		<title>Zadanie</title>
	</head>

	<body>
		<table>
        	<?php
				$array;
				$z;
				for($i=0;$i<20;$i++){
					for($j=0;$j<20;$j++){
						$z=65+$j;
						
						$array[$i][$j]=$i.chr($z);}}
						
				for($a=0;$a<20;$a++){
					echo "<tr>";
					for($b=0;$b<20;$b++){
						echo "<td>";
						echo $array[$a][$b];
						echo "</td>";}
						echo "</tr>";}
			?>
        </table>
    </body>
</html>