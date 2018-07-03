<?php
include('config.php');



$pdo = GetPDO();
if(isset($_GET['page'])){
    if($_GET['page'] == 1){

        $lim = 100;
        $off = 0;
    }else if($_GET['page'] == 2){

        $lim = 100;
        $off = 100;
    }
}
$sql = 'SELECT * FROM `clients` LIMIT '.$lim.' OFFSET '.$off.'';
$c = GetPDO()->prepare($sql);
//$c->bindParam(1,$lim);
//$c->bindParam(2,$off);

$c->execute();

$result = $c->fetchAll();


foreach($result as $row){

    echo '<a href="index7.php?id='.$row['id'].'">'.$row['name'].' '.$row['surname'].'</a><br>';
}