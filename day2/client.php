<?php
if (isset($_GET["id"])) {
  $id = $_GET["id"];
}


$link = mysqli_connect("localhost","root", "" );
mysqli_select_db($link, "php_camp");
$handle = mysqli_query($link, "SELECT * FROM clients where id = ".$id);
$data = mysqli_fetch_assoc($handle);
foreach($handle as $rows){

var_dump($rows);
}
?>