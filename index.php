<?php
$products =array();

$path =$_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);
print_r($pathArray);

$method =$_SERVER['REQUEST_METHOD'];

switch($method){
    case'GET':
        break;
    case'PUT':
        $params = json_decode(file_get_contents('php://input'),1);
    case'POST':
        $$params = json_decode(file_get_contents('php://input'),1);
        break;
    case'DELETE':
    default:
}

echo json_encode($products);