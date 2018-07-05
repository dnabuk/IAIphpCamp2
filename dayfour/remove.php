<?php
include "config.php";

$id = $_POST['id'];
if($id == null){
    $id = $_GET["id"];
}
// Delete record
$query = "DELETE FROM products WHERE id=".$id;
$result = mysqli_query($connection,$query);
if($result) {
    echo 1;
} else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    var_dump($connection);

    var_dump(mysqli_error($connection));

}