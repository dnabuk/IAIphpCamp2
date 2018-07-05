<?php

$products=array(
    array('id'=>3,'nazwa'=>"towar1",'cena'=>2),
    array('id'=>4,'nazwa'=>"towar2",'cena'=>6),
    array('id'=>6,'nazwa'=>"towar3",'cena'=>25),
    array('id'=>7,'nazwa'=>"towar4",'cena'=>22),
    array('id'=>12,'nazwa'=>"towar5",'cena'=>8)
);
$path=$_SERVER['PATH_INFO'];
$pathArray=explode('/',$path);

$zasob = $pathArray[1];
$idT = $pathArray[2];
$method = $_SERVER['REQUEST_METHOD'];
$produkty = array();

//die();

switch ($method) {
    case 'GET':

        if($idT !== null){
            foreach($products as $prod)
            {
                if($prod['id'] == $idT)
                    $produkty[] = $prod;
            }
        }
        else {
            foreach($products as $prod)
            {
                $produkty[] = $prod;
            }
        }

        break;

    case 'PUT':
        $params = json_decode(file_get_contents('php://input'), 1); //przekazane dane postem
        break;
    case 'POST':
        $params = json_decode(file_get_contents('php://input'), 1); //przekazane dane postem
    //zaktualizować dane
        break;
    case 'DELETE':
        //usunąć konkretny zasób na podstawie $pathArray
    default:
}
echo json_encode($produkty);