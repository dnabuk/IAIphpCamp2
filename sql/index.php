<?php
require_once "connect.php";
$conn= @new mysqli($host, $db_log, $db_pass, $db_name);
if($conn->connect_errno){
    echo "error";
}
else{
    echo "ok";
}
?>