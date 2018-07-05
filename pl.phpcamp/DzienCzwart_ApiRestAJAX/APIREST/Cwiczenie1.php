<?php
error_reporting(0);
$products = array(
    array(
        'id' => 1,
        'nazwa' => "Kubek",
        'cena' => 30,
    ),
    array(
        'id' => 2,
        'nazwa' => "Szklanka",
        'cena' => 13,
    ),
    array(
        'id' => 3,
        'nazwa' => "Kawa",
        'cena' => 7,
    ),
    array(
        'id' => 4,
        'nazwa' => "Talerz",
        'cena' => 10,
    ),
    array(
    'id' => 5,
    'nazwa' => "Masło",
    'cena' => 5.99,
    )
);

$action = $_GET['action'];
$id = $_GET['id'];
$name = $_GET['nazwa'];
$price = $_GET['cena'];


if ($action === 'checkProduct'){
    foreach ($products as $product){
        if ($product['nazwa'] === $name){
            break;
        }
    }
    $result = $product;
}elseif($action == 'addProduct'){
    $products[] =array('id' => $id, 'nazwa' => $name, 'cena' => $price);
    $result = $products;
}elseif ($action == 'removeProdtuct'){
    foreach ($products as $index => $product){
        if ($product['id'] == $id){
            unset($products[$index]);
            break;
        }
    }
    $result = $products;
}else{
    /*header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();*/

    $result = $products;
}

echo '<pre>';
var_dump($result);
echo '</pre>';

