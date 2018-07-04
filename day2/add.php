<?php
$member = array(
    'id' => 0,
    'name' => 0,
    'surname' => 0,
    'gender' => 0,
    'birth' => 0,
    'orders' => 0,
    'street' => 0,
    'city' => 0,
    'postcode' => 0,
    'country' => 0,
    'notes' => 0
);

foreach ($member as $key => $value) {
    if (isset($_GET[(string) $key])) {
        $member[$key] = $_GET[$key];
    }
}

$values = "";
foreach ($member as $key => $value) {
    $values .= "'" . $value . "', ";
}
var_dump($values);
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "php_camp");
if (mysqli_query($link, "INSERT INTO clients (id, name, surname, gender, date_of_birth, orders_count, street, city, postcode, country, notes) VALUES(" .$values. ")") === TRUE) {
    printf("lul worked");
} else {
    printf("nope");
}
;


?>