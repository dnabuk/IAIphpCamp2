<?php

function wysw(){
	global $link;
	
	?>
	<table>
    <tr><th>id</th><th>nazwa</th><th>cena</th><th>operacja</th></tr>
	<?php
	
				$zap="select * from products;";
				$wynik=mysqli_query($link,$zap);
				while($k=mysqli_fetch_assoc($wynik)){
					echo "<tr><td>".$k['id']."</td><td>". $k['nazwa']."</td><td>". $k['cena']."</td><td><button type='button' onClick='wys(".$k['id'].")'>Usuń</button><button type='button' onClick='dodaj()'>Dodaj</button><button type='button' onClick='update(".$k['id'].")'>Aktualizuj</button></td></tr>";}
					
						?>
						</table>
                        <?php
						}
						
						
?>						