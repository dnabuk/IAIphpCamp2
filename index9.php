<?php
/*
 *
 *
 *
 *
 */

require_once('config.php');

$product = $_GET['product'];
$action = $_GET['action'];
$name = $_GET['name'];
$price = $_GET['price'];

function checkProduct(){
    $sql = 'SELECT * FROM `products` WHERE id = ?';
    $c = GetPDO()->prepare($sql);
    $c->bindParam(1,$_GET['product']);
    $c->execute();
    $result = $c->fetchAll();
    foreach($result as $row) {
        echo $row['id'].'<br>';
        echo $row['name'].'<br>';
        echo $row['price'].'<br>';
    }
}
if(isset($_GET['action'])){
    if($_GET['action'] == 'checkProduct'){
        echo 'Wyświetlanie produktu o id: ';
        checkProduct();
    }else if ($_GET['action'] == 'addProduct'){
        $sql = 'INSERT INTO `products`(`name`, `price`) VALUES (?,?)';
        $c = GetPDO()->prepare($sql);
        $c->bindParam(1,$_GET['name']);
        $c->bindParam(2,$_GET['price']);
        $c->execute();
    } else if ($_GET['action'] == 'deleteProduct'){

            $sql = 'DELETE FROM `products` WHERE `products`.`id` = ?';
        $c = GetPDO()->prepare($sql);
        $c->bindParam(1,$_GET['product']);
        $c->execute();
        
    }

}



//function api('product',$_GET['action'],'name','price'){

//}