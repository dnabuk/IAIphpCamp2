<?php
$product=array('id1'=>array('1','jajka','4'),
				'id2'=>array('2','mleko','2'));

$path=$_SERVER['PATH_INFO'];
$pathArray=explode('/',$path);
print_r($pathArray);
echo "<br/>";
$method=$_SERVER['REQUEST_METHOD'];

switch($method){
	case 'GET':
		//
		break;
	case 'PUT':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'POST':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'DELETE':
		//
		break;
	default: break;
	}
echo json_encode($product);
?>