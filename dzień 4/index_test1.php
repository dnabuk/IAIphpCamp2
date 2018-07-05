<?php 
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "http://localhost/dzie%C5%84%204/index1.php?product=3&action=checkProduct"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch); 
        echo $output;
?>