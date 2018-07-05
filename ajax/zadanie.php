<?php
	$products = array();
	
	$connect = new mysqli("localhost", "root", "", "phpcamp_madamczak");
	
	$sql = "SELECT `id`, `name`, `price` FROM `products`";
	$result = $connect->query($sql);
	$control = $result->num_rows;
	if ($control > 0) {
    	while($row = $result->fetch_assoc()) {
			$products[] = array(
				'id' => $row['id'],
				'name' => $row['name'],
				'price' => $row['price']
			);
    	}
	}
	
	$style = "border: 1px solid black";
		
	echo '<table>';
	echo '<tr>';
	echo '<th style="' . $style . '">ID</th>';
	echo '<th style="' . $style . '">Nazwa</th>';
	echo '<th style="' . $style . '">Cena</th>';
	echo '<th style="' . $style . '">Operacje</th>';
	echo '</tr>';
		
	foreach ($products as $prod) {
		echo '<tr>';
		echo '<td style="' . $style . '">' . $prod['id'] . '</td>';
		echo '<td style="' . $style . '">' . $prod['name'] . '</td>';
		echo '<td style="' . $style . '">' . $prod['price'] . '</td>';
		echo '<td style="' . $style . '">' . '<button type="button">Usuń</button>' . '</td>';
		echo '</tr>';
	}
 
	echo '</table>';
?>