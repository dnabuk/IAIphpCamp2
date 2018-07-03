<?php
$mysqli = mysqli_connect('localhost', 'root','' ,'phpcamp_kkucinska');
if ($mysqli->connect_error) {
	die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
	if (mysqli_connect_error()) {
		die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
}
$result = mysqli_query($mysqli,"SELECT id, name, surname FROM `clients` WHERE id=975001 || id= 975002");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_free_result($result);
mysqli_close($mysqli); 