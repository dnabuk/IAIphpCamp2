<?php 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://localhost/dzie%C5%84%204/index1.php?action=addProduct&name=piwo&price=13.00");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		$wynik = json_decode($output,true);
		$id = $wynik[0]['id'];
		print_r($wynik);


        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "http://localhost/dzie%C5%84%204/index1.php?product=".$id."&action=checkProduct"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch); 
        print_r(json_decode($output,true));
               
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/dzie%C5%84%204/index1.php?product=".$id."&action=removeProduct");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        print_r(json_decode($output,true));
        
        
?>