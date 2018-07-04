<?php
require_once "config.php";

// Nauka INNER Joina :)
$query=mysqli_query($mysqli,"SELECT clients.id FROM clients INNER JOIN orders ON clients.id = orders.client_id");
while($crow = mysqli_fetch_array($query)) {

    echo $crow['id'];
    echo"<br>";
}
echo "oddziel";
$query=mysqli_query($mysqli,"SELECT clients.id FROM order LEFT JOIN orders ON clients.id = orders.client_id order by orders.purchased_items");
while($crow = mysqli_fetch_array($query)) {

    echo $crow['id'];
    echo"<br>";
}