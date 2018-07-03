<?php
/*
 * Config bazy z PDO
 */
$pdo = GetPDO();

class Db
{
    public $host = 'localhost';
    public $dbname = 'phpcamp_hrzadzinski';
    public $dbacc = 'root';
    public $dbpass = '';
}

function GetPDO()
{
    try {
        $db = new Db;
        return new PDO('mysql:host=' . $db->host . ';dbname=' . $db->dbname . '', $db->dbacc, $db->dbpass);
    } catch (PDOException $e) {
        echo 'SQL Connection ERROR! -> ' . $e->getMessage();
    }
}


?>