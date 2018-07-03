<?php
    $client_name = $_POST['client_name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $orders_count = $_POST['orders_count'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    //var_dump($_POST);

    $connect = mysqli_connect("localhost","root","","phpcamp_dmolenda");
    mysqli_select_db($connect,"phpcamp_dmolenda");
    $query = mysqli_query($connect,"INSERT INTO clients SET name = '$client_name', surname = '$surname', gender = '$gender',
    date_of_birth = '$date_of_birth', orders_count = '$orders_count', street = '$street', 
    city = '$city', postcode = '$postcode', country = 1, notes=''");
    
    $query1 = mysqli_query($connect, "SELECT count('id') FROM clients");
    while($row = mysqli_fetch_row($query1))
        for($i = 0; $i < count($row); $i++)
            echo "Liczba wszystkich klientow: ".$row[$i];

    //(mysqli_error($connect));

    // if($query)
    //     echo "Przesłano";
    // else
    //     echo "Nie przesłano";
?>