<?php

$ch = curl_init('http://localhost/phppc/index9.php?action=show&product=5');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//echo $result; // wynik w formacie JSON
//echo '<br>';
//var_dump(json_decode($result,true)); //wynik przekonwertowany z JSONa na PHP array
//$dd =json_decode($result,true);
echo '<br>';
foreach ($dd as $d){
    echo $d['id'];
}
