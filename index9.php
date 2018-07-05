<?php
/*
 *
 * Zadanie - napisanie skryptu który pobiera, tworzy i usuwa dane z tablicy/bazy
 *
 * Dzień 4
 */

require_once('config.php');

$product = intval($_GET['product']);
if(isset($_GET['name'])){$name = $_GET['name'];}
if(isset($_GET['price'])){ $price = (float)$_GET['price']; }

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'show') {

        $sql = 'SELECT * FROM `products` WHERE id = ?';
        $c = GetPDO()->prepare($sql);
        $c->bindParam(1, $_GET['product']);
        $c->execute();
        $result = $c->fetchAll(PDO::FETCH_ASSOC); //poprawka do poprawnego pobierania danych
        foreach ($result as $row) {

        }
        echo json_encode($result);
    } else if ($_GET['action'] == 'add') {
        $sql = 'INSERT INTO `products`(`name`, `price`) VALUES (?,?)';
        $c = GetPDO()->prepare($sql);
        $c->bindParam(1, $name);
        $c->bindParam(2, $price);
        $c->execute();
    } else if ($_GET['action'] == 'delete') {
        $sql = 'DELETE FROM `products` WHERE `products`.`id` = ?';
        $c = GetPDO()->prepare($sql);
        $c->bindParam(1, $_GET['product']);
        $c->execute();
    } else {
        echo 'Nieznana funkcja! (action=)';
    }
} else {
    echo 'Składnia: ?product=__&action=__&name=__&price=__';
}

