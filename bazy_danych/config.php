<?php
//polaczenie
$mysqli = new mysqli("127.0.0.1", "root", "mysql", "phpcamp_lk");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


?>