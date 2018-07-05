<?php


$ch = curl_init('http://localhost/PHPCamp/4/cwiczenie1.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
//echo $result;
$result=json_decode($result, true);
//var_dump($result);

echo "<table><tr>";
echo "<th>id</th>";
echo "<th>nazwa</th>";
echo "<th>cena</th>";
echo "</tr>";

foreach ($result as $key){
echo "<tr>";
echo "<td>" . (string)$key['id'] . "</td>";
echo "<td>" . (string)$key['nazwa'] . "</td>";
echo "<td>" . (string)$key['cena'] . "</td>";
echo "</tr>";
}

echo "</table>";
