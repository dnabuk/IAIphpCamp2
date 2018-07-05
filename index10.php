<?php
if (isset($_GET['product'])) {
    $product = $_GET['product'];
}
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
if (isset($_GET['price'])) {
    $price = $_GET['price'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'delete') {
        //$ch = curl_init('http://localhost/phppc/index9.php?action='.$action.'&product='.$product.'');
        $ch = curl_init('http://localhost/phppc/index11.php');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, "http://localhost/phppc/index11.php/products/" . $product . "/");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $result = curl_exec($ch);
//echo $result; // wynik w formacie JSON
//echo '<br>';
//var_dump(json_decode($result,true)); //wynik przekonwertowany z JSONa na PHP array

        /*
        $dd =json_decode($result,true);
        if(isset($dd)){
            foreach ($dd as $d){
                echo 'User id: '.$d['id'].'<br>';
                echo 'Name: '.$d['name'].'<br>';
                echo 'Price: '.$d['price'].'<br>';
            }
        }*/
    }else if ($action == 'put'){
        $ch = curl_init('http://localhost/phppc/index11.php');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, "http://localhost/phppc/index11.php/products/" . $product . "/");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        $result = curl_exec($ch);
    }
    else if ($action == 'post'){
        $data = array("account" => "1234", "dob" => "30051987", "site" => "mytestsite.com");
        $data = json_encode($data);
        $ch = curl_init('http://localhost/phppc/index11.php');
        curl_setopt($ch, CURLOPT_URL, "http://localhost/phppc/index11.php/products/" . $product);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //http_build_query($data);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
    }
}

