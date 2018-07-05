<?php
	function getProducts() {
	
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
		
		return $products;
		
	}
	
	function showTable() {
		
		$products = getProducts();
		
		$style = "border: 1px solid black";
	
		$result = '';
		$result .= '<table>';
		$result .= '<tr>';
		$result .= '<th style="' . $style . '">ID</th>';
		$result .= '<th style="' . $style . '">Nazwa</th>';
		$result .= '<th style="' . $style . '">Cena</th>';
		$result .= '<th style="' . $style . '">Operacje</th>';
		$result .= '</tr>';
		
		foreach ($products as $prod) {
			$result .= '<tr>';
			$result .= '<td style="' . $style . '">' . $prod['id'] . '</td>';
			$result .= '<td style="' . $style . '">' . $prod['name'] . '</td>';
			$result .= '<td style="' . $style . '">' . $prod['price'] . '</td>';
			$result .= '<td style="' . $style . '">' . '<button type="button" class="button">Usuń</button>' . '</td>';
			$result .= '</tr>';
		}
 
		$result .= '</table>';
	
		echo $result;
	
	}
?>