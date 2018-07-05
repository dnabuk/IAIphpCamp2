<?php

require_once('config.php');
//$id = 1;

//echo json_encode($result);
//$products = $result;

$path = $_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':

        if (isset($pathArray)) {
            if ($pathArray[1] == 'products') {
                $sql = 'SELECT * FROM `products` WHERE id = ?';
                $c = GetPDO()->prepare($sql);
                $c->bindParam(1, $pathArray[2]);
                $c->execute();
                $result = $c->fetchAll(PDO::FETCH_ASSOC); //poprawka do poprawnego pobierania danych
                foreach ($result as $row) {
                    echo 'Product id: ' . $row['id'] . '<br>';
                    echo 'Name: ' . $row['name'] . '<br>';
                    echo 'Price: ' . $row['price'] . '<br>';
                }
                if($pathArray[2] == null){
                    $sql = 'SELECT * FROM `products`';
                    $c = GetPDO()->prepare($sql);
                    $c->bindParam(1, $pathArray[2]);
                    $c->execute();
                    $result = $c->fetchAll(PDO::FETCH_ASSOC); //poprawka do poprawnego pobierania danych
                    echo '<table>';
                    foreach ($result as $row) {
                        echo '<tr>';
                        echo '<td>Product id: ' . $row['id'] . '</td>';
                        echo '<td>Name: ' . $row['name'] . '</td>';
                        echo '<td>Price: ' . $row['price'] . '</td>';
                        echo '</tr>';
                    }
                    echo json_encode($result);
                    echo '</table>';
                }
            }
            if ($pathArray[1] == 'clients') {
                $sql = 'SELECT * FROM `clients` WHERE id = ?';
                $c = GetPDO()->prepare($sql);
                $c->bindParam(1, $pathArray[2]);
                $c->execute();
                $result = $c->fetchAll(PDO::FETCH_ASSOC); //poprawka do poprawnego pobierania danych
                foreach ($result as $row) {
                    echo 'Client id: ' . $row['id'] . '<br>';
                    echo 'Name: ' . $row['name'] . '<br>';
                    echo 'Price: ' . $row['surname'] . '<br>';
                }
            }

        }
        break;
    case 'PUT':
        $params = json_decode(file_get_contents('php://input'), 1);
        echo 'put';
        break;
    case 'POST':
        //$params = json_decode(file_get_contents('php://input'),1);
        $fp = fopen('php://input', 'r');
        $params = stream_get_contents($fp);
        var_dump($params);
        break;
    case 'DELETE':
        if (isset($pathArray)) {
            if ($pathArray[1] == 'products') {
                echo $pathArray[2];
                $sql = 'DELETE FROM `products` WHERE `products`.`id` = ?';
                $c = GetPDO()->prepare($sql);
                $c->bindParam(1, $pathArray[2]);
                $c->execute();
                echo 'Usunięto produkt!';
            }
        }
        break;
}
//print_r($pathArray);
//echo json_encode($products);
