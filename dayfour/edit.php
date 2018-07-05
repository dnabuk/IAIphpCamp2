<?php
include "config.php";
$id = $_POST['id'];
$newnazwa = $_POST['nazwa'];
$newcena = $_POST['cena'];
$edit="UPDATE products SET `nazwa`='$newnazwa', `cena`='$newcena' WHERE `id`=$id";
echo $edit;
$result = mysqli_query($connection,$edit);
if($result) {
    echo 1;
} else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    var_dump($connection);

    var_dump(mysqli_error($connection));

}