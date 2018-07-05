<?php 

$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");

$sql = "SELECT `id`, `name`, `price` FROM `products`";
	$result = $connect->query($sql);
	$control = $result->num_rows;
	if ($control > 0) {
    	while($row = $result->fetch_assoc()) {
    		$products[] = array (
    			'id' => $row['id'],
    			'name' => $row['name'],
    			'price' => $row['price']
    		);
    	}
    }

	
	echo '<table border="1" >';
	echo "<tr><th>ID</th>";
	echo "<th>NAZWA</th>";
	echo "<th>CENA</th>";
	echo "<th>OPERACJE</th></tr>";
	$new = "";
	foreach($products as $prod)
	{
		$new .= "<tr><th>".$prod['id']."</th>";
		$new .= "<th>".$prod['name']."</th>";
		$new .= "<th>".$prod['price']."</th>";
		$new .= "<th><button>USUŃ</button></th></tr>";

	}
	echo $new;
	echo "</table>";
?>