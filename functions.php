<?php
function wysw($name){
	global $link;
	if($name=='0'){
				$zap="select * from products;";
				$wynik=mysqli_query($link,$zap);
				while($k=mysqli_fetch_assoc($wynik)){
					echo $k['id']." ". $k['nazwa']." ". $k['cena']."<br/>";}}
					else{
						$zap="select * from products where nazwa='$name'";
						$wynik=mysqli_query($link,$zap);
						while($k=mysqli_fetch_assoc($wynik)){
							echo $k['id']." ". $k['nazwa']." ". $k['cena']."<br/>";}
						}}
						
?>						