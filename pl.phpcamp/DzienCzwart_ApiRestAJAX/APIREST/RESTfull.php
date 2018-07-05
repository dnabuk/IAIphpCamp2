<?php
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
);// tablica zadeklarowana w pierwszym zadaniu
$path = $_SERVER['PATH_INFO'];
$pathArray = explode('/product', $path);
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
// zwrotka na podstawie tablicy $pathArray
        break;
    case 'PUT':
        $params = json_decode(file_get_contents('php://input'), 1); // przekazane dane postem
        break;
    case 'POST':
        $params = json_decode(file_get_contents('php://input'), 1); // przekazane dane postem
// zaktualizować dane
        break;
    case 'DELETE':
// usunąć konkretny zasób na podstawie $pathArray
    default:
}
echo json_encode($products);