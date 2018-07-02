<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8" />
		<title>Zadanie</title>
        <style>
        td{
        border:1px solid #000;
        margin:0px;}
        </style>
        
	</head>

	<body>
		<table>
        	<?php
				
				$array;
				$z;
				$licznik=0;
				for($i=0;$i<20;$i++){
					for($j=0;$j<20;$j++){
						$z=65+$j;
						
						$array[$i][$j]=$i.chr($z);}}
						
				for($a=0;$a<20;$a++){
					$licznik++;
					echo "<tr>";
					for($b=0;$b<20;$b++){
						$licznik++;
						if($licznik%2){
						echo "<td bgcolor=#CC6600>";}else{echo "<td>";};
						echo $array[$a][$b];
						echo "</td>";}
						echo "</tr>";}
			?>
        </table>
    </body>
</html>