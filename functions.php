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
					echo "<tr><td>".$k['id']."</td><td>". $k['nazwa']."</td><td>". $k['cena']."</td><td><button>Usuń</button></td></tr>";}
					
						?>
						</table>
                        <?php
						}
						
						
?>						