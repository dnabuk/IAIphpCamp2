<?php
/*
 * Zadanie - Połączenie się z bazą przy pomocy PDO oraz Mysqli
 *
 * Zadanie 2 - Połączenie się z bazą i wykonanie operacji łączenia dwóch tabel
 */
include('config.php'); //zawiera połączenie z pdo

$pdo = GetPDO();
$sql = 'SELECT c.id FROM clients c INNER JOIN zamowienia o ON c.id = o.client_id GROUP BY c.id HAVING SUM(o.purchased_items) > 10';
$c = GetPDO()->prepare($sql);
$c->execute();
$result = $c->fetchAll();

foreach($result as $row) {
    //echo $row['name'].' '.$row['surname'].'<br>';
    echo $row['id'].'<br>';
}


echo'<br>';

$cc = mysqli_connect('localhost','root','','phpcamp_hrzadzinski');

$sql = "SELECT * FROM `clients` LIMIT 10";
$result2 = $cc->query($sql); //obydwa działają
$result2 = mysqli_query($cc,$sql); //działa

foreach($result2 as $row2){
    echo $row2['name'].' '.$row2['surname'].'<br>';
    //echo var_dump($row2);
}
