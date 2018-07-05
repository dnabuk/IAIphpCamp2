<?php


$products = array(
  array('id'=>01,'nazwa'=>'komputer','cena'=>3000.00),
  array('id'=>02,'nazwa'=>'myszka','cena'=>50.00),
  array('id'=>03,'nazwa'=>'podkładka','cena'=>25.00),
  array('id'=>04,'nazwa'=>'zasilacz','cena'=>150.00),
  array('id'=>05,'nazwa'=>'drukarka','cena'=>550.00),
);

$action=$_GET['action'];
$product=$_GET['product'];
$name=$_GET['name'];
$price=$_GET['price'];



if($action === 'checkProduct'){
  foreach($products as $product){
    if($product['nazwa']===$name){
      break;
    }
  }
  $result=$product;
}
elseif ($action==='addProduct'){
  $products[]=array('id'=>$id,'nazwa'=>$name,'cena'=>$price);
  $result=$products;
}
elseif ($action==='removeProduct'){
  foreach($products as $index => $product){
    if($product['id']==$id){
      unset($products[$index]);
      break;
    }
  }
  $result=$products;
}
else {
  $result=$products;
}

print_r($result);
