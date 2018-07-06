<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "www.tank.iai.ninja/api/join-current-game.php?name=tygrys1");
curl_setopt($ch, CURLOPT_POST, true);

$result = curl_exec($ch);
$result =json_decode($result,true);
file_put_contents('key.dat', $result['key']['dat']);

