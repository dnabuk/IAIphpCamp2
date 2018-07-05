<?php

$products=array(
    array('id'=>3,'nazwa'=>"towar1",'cena'=>2),
    array('id'=>4,'nazwa'=>"towar2",'cena'=>6),
    array('id'=>6,'nazwa'=>"towar3",'cena'=>25),
    array('id'=>7,'nazwa'=>"towar4",'cena'=>22),
    array('id'=>12,'nazwa'=>"towar5",'cena'=>8)
);
$action=$_GET['action'];
$id=$_GET['id'];
$name=$_GET['name'];
$price=$_GET['price'];

if($action==='checkProduct') {
    foreach ($products as $product) {
        if ($product['nazwa'] === $name) {
            break;
        }
    }
    $result = $product;
}elseif($action==='addProduct') {
        $products[]=array('id'=>$id, 'nazwa'=>$name,'cena'=>$price);
        $result=$products;
        }elseif($action==='removeProduct'){
        foreach($products as $index=>$product){
            if($product['id']==$id){
                unset($products[$index]);
                break;
            }
    }
    $result=$products;
    }else{
        $result=$products;
    }
    print_r($result);


