<?php
require_once "config.php";


$query = "SELECT name, surname FROM clients ORDER by id DESC LIMIT 50,5";

if ($result = $mysqli->query($query)) {

 /* fetch associative array */
 while ($row = $result->fetch_assoc()) {

  echo  $row["name"];
  echo "<br>";
  echo $row["surname"];
 }

 /* free result set */
 $result->free();
}

/* close connection */
$mysqli->close();