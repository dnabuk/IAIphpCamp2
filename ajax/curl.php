<?php
$ch = curl_init("http://localhost/phpcamp/cw.php?name=a&product=3&price=99.99&action=addProduct");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
print_r($result);
echo "<br />decoded: \n";
var_dump(json_decode($result,true));
?>