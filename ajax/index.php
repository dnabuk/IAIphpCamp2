<?php
$products = array(
    array(
        'id' => 0,
        'nazwa' => "a",
        'cena' => 0
    ),
    array(
        'id' => 1,
        'nazwa' => "b",
        'cena' => 0
    ),
    array(
        'id' => 2,
        'nazwa' => "c",
        'cena' => 0
    ),
    array(
        'id' => 3,
        'nazwa' => "d",
        'cena' => 0
    ),
    array(
        'id' => 4,
        'nazwa' => "e",
        'cena' => 0
    )
);

$path = $_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);
$method = $_SERVER['REQUEST_METHOD'];


switch($method){
    case 'GET':
        $end_path = end($pathArray);
        if($end_path == 'products'){
            echo json_encode($products);
        }
        else if(isset($products[(int)$end_path]) && $pathArray[1]=="products"){
            echo json_encode($products[(int)$end_path]);
        }
        else echo "No such file or directory";
        break;
    case 'PUT':
        $params = json_decode(file_get_contents('php://input'), 1);
        $products[$params[0]] = $params;
        
        break;
    case 'POST':
        $params = json_decode(file_get_contents('php://input'), 1);
        if(isset($products[$params[0]])){
            $products[$params[0]] = $params;
        }
        break;
    case 'DELETE':
        $end_path = end($pathArray);
        if($end_path == 'products'){
            unset($products);
        }
        else if(isset($products[(int)$end_path]) && $pathArray[1]=="products"){
            unset($products[$end_path]);
        }
        else echo "No such file or directory";
        break;
    default:
        echo json_encode($products);
}

