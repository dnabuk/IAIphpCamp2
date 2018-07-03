<?php
include('config.php');


$cc = mysqli_connect('localhost','root','','phpcamp_hrzadzinski'); // zrobione po to aby móc użyć mysqlirealescapestring

$get = mysqli_real_escape_string($cc,$_GET['page']);
$pdo = GetPDO();
if(isset($get)){
    if($get == 1){

        $lim = 100;
        $off = 0;
    }else if($get == 2){

        $lim = 100;
        $off = 100;
    }
}
$sql = 'SELECT * FROM `clients` LIMIT '.$lim.' OFFSET '.$off.'';

$c = GetPDO()->prepare($sql);

$c->execute();

$result = $c->fetchAll();

$cc->close(); //zamykanie połączenia z nieużywanym mysqli
foreach($result as $row){

    echo '<a href="index7.php?id='.$row['id'].'">'.$row['name'].' '.$row['surname'].'</a><br>';
}