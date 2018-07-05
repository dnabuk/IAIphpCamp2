<?php
	$curl=curl_init('http://localhost/phpcamp2/phpcamp/1_day3/4_day/task1_5.php?action=checkProduct&name=Kubek');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result=curl_exec($curl);
	var_dump(json_decode($result,true));