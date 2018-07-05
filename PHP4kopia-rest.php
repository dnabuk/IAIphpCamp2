<?php
//error_reporting(0);
    $products[0]['product'] = 1;
    $products[0]['name'] = 'kubek';
    $products[0]['price'] = 20;
            
    $products[1]['product'] = 2;
    $products[1]['name'] = 'szczotka';
    $products[1]['price'] = 3;
            
    $products[2]['product'] = 3;
    $products[2]['name'] = 'czapka';
    $products[2]['price'] = 50;
            
    $products[3]['product'] = 4;
    $products[3]['name'] = 'telefon';
    $products[3]['price'] = 800;
            
    $products[4]['product'] = 5;
    $products[4]['name'] = 'telewizor';
    $products[4]['price'] = 2000;
    
    $json = json_encode($products);
    //echo $json;
            
    $path = $_SERVER['PATH_INFO'];
    $pathArray = explode('/', $path);
    $name = $pathArray[2];
    
    //echo json_encode($pathArray);
    
            
    $method = $_SERVER['REQUEST_METHOD'];
            
    switch ($method)
    {
        case 'GET':
            foreach ($products as $product)
                        {
                            if ($product['name'] == $name)
                            {
                                echo json_encode($product);
                            break;
                            }
                        }
        break;
                
        case 'PUT':
            $params = json_decode(file_get_contents('php://input'), 1);
        break;
            
        case 'POST':
            $params = json_decode(file_get_contents('php://input'), 1);
        break;
            
        case 'DELETE':
        default:
    }         
?>


