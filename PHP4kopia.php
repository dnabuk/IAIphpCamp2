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

    $products[3]['product'] = 5;
    $products[3]['name'] = 'telewizor';
    $products[3]['price'] = 2000;

    $json = json_encode($products);
    echo $json;
    die;

    $action = (isset($_GET['action'])) ?$_GET['action']:NULL;

    $name = (isset($_GET['name'])) ?$_GET['name']:NULL;

    $id = (isset($_GET['id'])) ?$_GET['id']:NULL;

    $price = (isset($_GET['price'])) ?$_GET['price']:NULL;

        switch ($action)
        {
            case 'checkProduct':
                foreach ($products as $product)
                {
                    if ($product['name'] == $name)
                    {
                        echo 'nazwa: ' . $product['name'] . '<br/>';
                        echo 'id produktu: ' . $product['product'] . '<br/>';
                        echo 'cena produktu: ' . $product['price'] . '<br/>';
                    break;
                    }
                }
                break;

            case 'addProduct':
            {
                        $products[]['product'] = $id;
                        $products[]['name'] = $name;
                        $products[]['price'] = $price;
                        break;
            }
            break;

            case 'removeProduct':
                foreach ($products as $index=>$product)
                {
                    if ($product['product'] == $id)
                    {
                        unset ($products[$index]);
                        break;
                    }
                }       
            break;
        }         
?>


