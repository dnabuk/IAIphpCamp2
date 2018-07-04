<?php
/*
 * Zadanie z klas: operacje na produkcie - dzień 3
 *
 *
 */
require_once('klasy/products.inc.php');
require_once('klasy/virtualproducts.inc.php');

$product = new Products;
$vp = new VirtualProducts;


try {
    $vp->a = 1;
} catch (Exception $e) {
    echo '<b>'.$e.'</b>';
}
$vp->b;