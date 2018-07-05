<?php
if (isset($_GET['product'])) {
    $product = $_GET['product'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$ch = curl_init('http://localhost/phppc/index9.php?action='.$action.'&product='.$product.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//echo $result; // wynik w formacie JSON
//echo '<br>';
//var_dump(json_decode($result,true)); //wynik przekonwertowany z JSONa na PHP array
$dd =json_decode($result,true);
foreach ($dd as $d){
    echo 'User id: '.$d['id'].'<br>';
    echo 'Name: '.$d['name'].'<br>';
    echo 'Price: '.$d['price'].'<br>';
}
