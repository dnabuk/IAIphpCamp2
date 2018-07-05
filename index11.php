<?php

require_once('config.php');
$id = 1;

//echo json_encode($result);
//$products = $result;

$path = $_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        //echo json_encode($products);
        //var_dump($pathArray);
        if(isset($pathArray)){
            if($pathArray[1] == 'products'){
                $sql = 'SELECT * FROM `products` WHERE id = ?';
                $c = GetPDO()->prepare($sql);
                $c->bindParam(1, $pathArray[2]);
                $c->execute();
                $result = $c->fetchAll(PDO::FETCH_ASSOC); //poprawka do poprawnego pobierania danych
                foreach ($result as $row) {
                    echo 'Product id: '.$row['id'].'<br>';
                    echo 'Name: '.$row['name'].'<br>';
                    echo 'Price: '.$row['price'].'<br>';
                }
                //var_dump($result);
            }

        }
        break;
    case 'PUT':
        $params = json_decode(file_get_contents('php://input'),1);
        break;
    case 'POST':
        $params = json_decode(file_get_contents('php://input'),1);
        break;
    case 'DELETE':
        break;
}
//print_r($pathArray);
//echo json_encode($products);
