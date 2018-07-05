<?php
$products1 = array(
    'id' => 1,
    'nazwa' => 'kubek',
    'cena'=> 23
);

$products2 = array(
    'id' => 2,
    'nazwa' => 'lyzka',
    'cena'=> 90
);
$products3 = array(
    'id' => 3,
    'nazwa' => 'widel',
    'cena'=> 55
);
$products4 = array(
    'id' => 4,
    'nazwa' => 'talerz',
    'cena'=> 89
);
$products5 = array(
    'id' => 5,
    'nazwa' => 'miska',
    'cena'=> 43
);

$products=array($products1,$products2, $products3, $products4, $products5);


$action = $_GET['action'];
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];


switch ($action){
    case 'checkProduct':
        foreach ($products as $product){
            if ($name==$product['nazwa']){
                echo $product['id'] . " " .$product['nazwa'] . " " .$product['cena'] .'<br/>';
            }
        }
    break;
    case 'addProduct':
        $products['nazwa'] = $
              echo $product['id'] . " " .$product['nazwa'] . " " .$product['cena'] .'<br/>';
    break;

}

?>
<?php
