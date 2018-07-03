<?php
$link = mysqli_connect ("127.0.0.1", "root", "","phpcamp_dmolenda");
mysqli_select_db($link, "phpcamp_dmolenda");
$sql = "SELECT * FROM `clients` LIMIT 10";
$result2 = $link->query($sql);

foreach($result2 as $row2)
{
    echo $row2['name'].' '.$row2['surname'].'<br>';
}
?>