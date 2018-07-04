<?php
include_once 'vproduct.php';
include_once 'product.php';

$p = new Product(1, 2, 3, 4, 5, 6);

var_dump($p);
$q = new Vproduct(1, 2, 3, 4, 5, 6, 7);


try {
    $q->__set('product_id', 44);
} catch (Exception $e) {
    echo "u w0t m8";
}
$q->set_link('omegalul.jpg');
var_dump($q);
unset($q);
unset($p);