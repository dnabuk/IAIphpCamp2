<?php
$ch = curl_init('http://localhost/PHPCamp/4/cwiczenie1.php?action=chheckProduct');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
print_r($result);




 ?>
