<?php
$ch = curl_init('http://localhost/czwartek/api.php/products');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//echo $result;
$tab = json_decode($result, true);
foreach ($tab as $row){
	print_r($row);
	echo '<br>';
}