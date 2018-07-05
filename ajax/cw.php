<?php
$products = array(
    array(
        'id' => 3,
        'nazwa' => "a",
        'cena' => 0
    ),
    array(
        'id' => 4,
        'nazwa' => "b",
        'cena' => 0
    ),
    array(
        'id' => 5,
        'nazwa' => "c",
        'cena' => 0
    ),
    array(
        'id' => 6,
        'nazwa' => "d",
        'cena' => 0
    ),
    array(
        'id' => 7,
        'nazwa' => "e",
        'cena' => 0
    )
);

$answers = array(
    $_GET['product'],
    $_GET['action'],
    $_GET['name'],
    $_GET['price']
);
switch ($answers[1]) {
    case "checkProduct":
        check($products, $answers[2]);
        break;
    case "addProduct":
        add($products, $answers[0], $answers[3], $answers[2]);
        break;
    case "removeProduct":
        remove($products, $answers[0]);
        break;
    default:
        echo "No instruction given, terminating";
        die();
}

function check(& $products, $name)
{
    $found = false;
    $values = array();
    foreach ($products as $key => $value) {
        if ($value['nazwa'] == $name) {
            $values[] = $value;
            $found = true;
        }
    }
    if (! $found) {
        echo "No products matching the query!";
    } else
        echo json_encode($values);
}

function add(& $products, $id, $price, $name)
{
    if ($id > 10 | $id < 1) {
        echo "Error: ID out of range. Terminating";
        die();
    } else {
        $products[] = array(
            'id' => $id,
            'nazwa' => $name,
            'cena' => $price
        );
    }
    echo json_encode($products);
}

function remove(& $products, $id)
{
    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
            unset($products[$key]);
        }
    }
    echo json_encode($products);
}
?>