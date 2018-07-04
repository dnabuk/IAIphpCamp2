<?php

$link = mysqli_connect ("localhost", "root", "");
mysqli_select_db($link, "phpcamp_jprzeworski");

$_GET['id'] = (int) $_GET['id'];

$query = "DELETE FROM clients WHERE `id` = ?";

$stmt = $link->prepare($query);
$stmt->bind_param("i", $_GET['id']);

if($stmt->execute())
{
	echo "DZIALA";
}
else
	echo "Nie dziala";

$result->free_result();

//$a = mysqli_query($link, $query);
//var_dump(mysqli_fetch_assoc($a));
?>