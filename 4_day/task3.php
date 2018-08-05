<?php
require_once 'connect.php';
$path=$_SERVER['PATH_INFO'];
$pathArray=explode('/', $path);
$method=$_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
		if(isset($pathArray[2]))
			{
				$name = mysqli_real_escape_string($link,htmlentities($pathArray[2]));
				$query="SELECT * from `product` WHERE nazwa='$name'";
				if($result= mysqli_query($link,$query)){
					if (mysqli_num_rows($result)==0) {
						echo json_encode('Brak porduktu o podanyej nazwie');
						die();
					}
					while ($data= mysqli_fetch_assoc($result)) {
						$dataa[]=$data;

					}
					echo json_encode($dataa);
		}
			}else{
				$query="SELECT * from `product`";
				if($result= mysqli_query($link,$query)){
					if (mysqli_num_rows($result)==0) {
						echo json_encode('Brak porduktów na liście');
					die();
			}
			while ($data= mysqli_fetch_assoc($result)) {
				$dataa[]=$data;
			}
			echo json_encode($dataa);
		}
	}
		break;
	case 'PUT':
		$params=json_decode(file_get_contents('php://input'),true);
		if (!isset($params['name'])) {
			echo json_encode("Podaj nazwę produktu");
			die();
		}
		if (!isset($params['price'])) {
			echo json_encode("Podaj nazwę produktu");
			die();
		}
		$name = mysqli_real_escape_string($link,htmlentities($params['name']));
		$price = mysqli_real_escape_string($link,htmlentities($params['price']));
		$query_ins="INSERT INTO `product` values(null,'$name','$price')";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			//echo json_encode('wysłano');
		}
		$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			while ($data= mysqli_fetch_assoc($result)) {
				$dataa[]=$data;
				
			}
			
			echo json_encode($dataa);
		}
		break;
	case 'POST':
		
		$params=json_decode(file_get_contents('php://input'),1);
		if (!isset($pathArray[2])) {
			if (!isset($params['name'])) {
			echo json_encode("Podaj nazwę produktu");
			die();
		}
		if (!isset($params['price'])) {
			echo json_encode("Podaj nazwę produktu");
			die();
		}
		$name = mysqli_real_escape_string($link,htmlentities($params['name']));
		$price = mysqli_real_escape_string($link,htmlentities($params['price']));
		$query_ins="INSERT INTO `product` values(null,'$name','$price')";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			//echo json_encode('wysłano');
		}
		$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			while ($data= mysqli_fetch_assoc($result)) {
				$dataa[]=$data;
				
			}
		
			echo json_encode($dataa);
		}
		}else{
		
		if (!isset($params['name'])) {
			echo json_encode("Podaj nazwę produktu");
			die();
		}
		if (!isset($params['price'])) {
			echo json_encode("Podaj cenę produktu");
			die();
		}
		if (!isset($pathArray[2])) {
			echo json_encode("Podaj id produktu");
			die();
		}
		$id=(int)$pathArray[2];
		$name = mysqli_real_escape_string($link,htmlentities($params['name']));
		$price = mysqli_real_escape_string($link,htmlentities($params['price']));
		$query_ins="UPDATE `product` set nazwa='$name',cena='$price' WHERE id = $id";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			while ($data= mysqli_fetch_assoc($result)) {
				$dataa[]=$data;
				
			}
			
			echo json_encode($dataa);
		}
		}
		}

		break;
	case 'DELETE':
		if (!isset($pathArray[2])) {
			echo json_encode("Podaj id");
			die();
		}
		$id=(int)$pathArray[2];
		$query="SELECT * from `product` WHERE id='$id'";
		if($result= mysqli_query($link,$query)){
			if (mysqli_num_rows($result)==0) {
				echo json_encode('Brak porduktu o podanym id');
				die();
			}

		}

		$query_ins="DELETE FROM `product` WHERE id=$id";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			//echo json_encode('wysłano');
		}
		$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			while ($data= mysqli_fetch_assoc($result)) {
				$dataa[]=$data;

				
			}
			echo json_encode($dataa);
		}
		break;
}

?>