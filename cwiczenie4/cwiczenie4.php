<?php

//$name=(string) $_POST['name'];
$name=htmlspecialchars((string) $_POST['name']);
$surname=htmlspecialchars((string) $_POST['surname']);
$gender=htmlspecialchars((string) $_POST['gender']);
$city=htmlspecialchars((string) $_POST['city']);

echo "$name<br>";
echo "$surname<br>";
echo "$gender<br>";
echo "$city<br>";


 ?>
