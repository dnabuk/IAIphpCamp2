<?php
error_reporting(0);
$products = array(
    array('id'=>3,'nazwa'=>'kubek','cena'=>9),
    array('id'=>2,'nazwa'=>'lyzka','cena'=>78),
    array('id'=>3,'nazwa'=>'miska','cena'=>89),
    array('id'=>4,'nazwa'=>'talerz','cena'=>56),
    array('id'=>5,'nazwa'=>'noz','cena'=>99)
);

$action = $_GET['action'];
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];

if($action ==='checkProduct'){
    foreach($products as $product){
        if($product['nazwa'] ===$name){
            break;
        }

    }
    $result=$product;
} elseif($action ==='addProduct'){
    $products[] = array('id'=>id, 'nazwa'=>$name, 'cena'=>$price);
    $result=$products;
} elseif($action ==='removeProduct'){
    foreach($products as $index=>$product){
        if($product['id']==$id){
            unset($product[$index]);
            break;
        }
    }
    $result=$products;
}else{
    $result=$products;
}

print_r($result);
