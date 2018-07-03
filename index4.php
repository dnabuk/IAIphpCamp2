<?php

$pdo = GetPDO();

class Db
{
    public $host = 'localhost';
    public $dbname = 'phpcamp_hrzadzinski';
    public $dbacc = 'root';
    public $dbpass = '';
}

function GetPDO() {
    try {
        $db = new Db;
        return new PDO('mysql:host=' . $db->host . ';dbname=' . $db->dbname . '', $db->dbacc, $db->dbpass);
    }
    catch(PDOException $e) {
        echo 'SQL Connection ERROR! -> ' . $e->getMessage();
    }
}

$pdo = GetPDO();
$sql = 'SELECT * FROM `clients` LIMIT 10';
$c = GetPDO()->prepare($sql);
$c->execute();
$result = $c->fetchAll();

foreach($result as $row) {
    echo $row['name'].' '.$row['surname'].'<br>';
}


echo'<br>';

$cc = mysqli_connect('localhost','root','','phpcamp_hrzadzinski');

$sql = "SELECT * FROM `clients` LIMIT 10";
$result2 = $cc->query($sql);

foreach($result2 as $row2){
    echo $row2['name'].' '.$row2['surname'].'<br>';
}

