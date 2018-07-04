<?php
require_once "config.php";
if(isset($_POST['save'])){

    //pierwszy raz uzywam bindowania w Mysqli , uzywalem PDO nie wiem czy dobrze rozumiem skladnie:)
    $stmt = $mysqli->prepare("INSERT INTO clients (date_of_birth, name, surname, street, gender, city, postcode) VALUES (?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("sssssss", $_POST['date_of_birth'], $_POST['name'], $_POST['surname'], $_POST['street'], $_POST['gender'], $_POST['city'], $_POST['postcode']);


    
    if($stmt->execute()){

        echo "<div  style='
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #3c763d;
    font-family: Verdana,sans-serif;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    box-sizing:inherit;
    '>
  <strong>Dodano nowego klienta!</strong><br>Aby dodać kolejnego klienta kliknij <a href='formularz.html'>tutaj</a>
</div>";
    }

    $stmt->close();
    $mysqli->close();
}