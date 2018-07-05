<?php
    function getProduct(){
        $link = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($link, "phpcamp_jszafraniak");
        
        $resultHandle = mysqli_query($link, "SELECT * FROM produkty");
        
        $products = [];
        
        while ($data = mysqli_fetch_assoc($resultHandle)) 
        {
            //var_dump($data);
            $products[] = $data;
        }
        return $products;
    }
    
    function showTable(){
        //wyświetlanie tabeli jak w PHP41, ale poprawione pod bazę
    }
?>

