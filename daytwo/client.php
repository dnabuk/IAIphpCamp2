<?php
$mysqliConnection = mysqli_connect ("localhost", "dagmara", "", 'phpcamp_dtega');
$mysqliConnection -> select_db($phpcamp_dtega);

$query ='SELECT * FROM clients WHERE id = ?';

$stmt = $mysqliConnection->prepare($query);
$stmt->bind_param("i",$_GET['id']);


if($stmt ->execute()){
   echo 'Zapytanie wykonane poprawnie';
    $result = $stmt->get_result();
    $result = $result->fetch_assoc();
    var_dump($result);

} else{
    echo 'Błąd zapytania';
}
$stmt->free_result();