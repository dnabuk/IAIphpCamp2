<!DOCTYPE html>
<html>
<body>
<?php

//phpinfo();
//die;
$link = mysqli_connect ("127.0.0.1", "root", "");
mysqli_select_db($link, "phpcamp_apabisiak");
var_dump($_POST);
$sql="INSERT INTO clients (name, surname, gender, date_of_birth, orders_count, street, city, postcode, country, notes)
VALUES
('$_POST[name]','$_POST[nazwisko]','$_POST[gender]','$_POST[date_of_birth]','$_POST[orders_count]',
'$_POST[street]','$_POST[city]','$_POST[postcode]','$_POST[country]','$_POST[notes]')";
 
 mysqli_query($link, $sql);
var_dump(mysqli_error($link));

?>
</body>
</html>