<?php 
$ch=curl_init('http://localhost/phpcamp%205.07/index.php?id=1&action=checkProduct&name=kolejny_rower&price=2000');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result =curl_exec($ch);
print_r($result);
?>