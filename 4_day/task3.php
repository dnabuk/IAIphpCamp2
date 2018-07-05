<?php
require_once 'connect.php';
$path=$_SERVER['PATH_INFO'];
$pathArray=explode('/', $path);
$method=$_SERVER['REQUEST_METHOD'];
//var_dump($pathArray);
switch ($method) {
	case 'GET':
		//$name = mysqli_real_escape_string($link,htmlentities($_POST['name']));
		$query="SELECT * from `product`";
		if($result= mysqli_query($link,$query)){
			if (mysqli_num_rows($result)==0) {
				echo 'Brak porduktu o podanyej nazwie';
				die();
			}
			while ($data= mysqli_fetch_assoc($result)) {
				echo $data;
				//var_dump($data);
			}
		}
		break;
	case 'PUT':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'POST':
		echo json_encode($method);
		//$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'DELETE':
		# code...
		break;
}
//echo json_encode($method);
?>