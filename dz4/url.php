<?php

$ch = curl_init('http://localhost/phpCamp2018/dz4/produkty.php?id=3&action=check&name=butelka&price=5'); //uchwyt do strony
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	//określenie ze strona ma się wywoływać zależnie od true/false
$result = curl_exec($ch);

$wynik = json_decode($result, true);
//print_r($wynik);


echo '<table border = "1" cellpadding = "3" cellspacing = "0">';
		echo "<tr>
		<td>Id</td><td>Nazwa</td><td>Cena</td>
	<tr/>";
foreach ($wynik as $product)
{
	echo '<tr>
		<td>'.$product["id"].'</td><td>'.$product["nazwa"].'</td><td>'.$product["cena"].'</td>
	<tr/>';
}

?>