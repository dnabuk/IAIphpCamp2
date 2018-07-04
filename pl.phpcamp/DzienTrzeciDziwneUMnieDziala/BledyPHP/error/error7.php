<?php

class A {

    public function getSum($basket)
    {
        $sum = 0;
        foreach ($basket as $product) {
            $sum = $sum + $product['quantity'];
        }
        echo 'Łączna liczba sztuk: '.  $sum;
    }
}

$objA = new A();

$basket = [
    ['productId' => 763, 'quantity' => 1],
    ['productId' => 31238, 'quantity' => 2],
    ['productId' => 4523, 'quantity' => 1],
    ['productId' => 19879, 'quantity' => 41],
];
echo '<pre>';
var_Dump($basket);
echo '</pre>';
$objA->getSum($basket);

