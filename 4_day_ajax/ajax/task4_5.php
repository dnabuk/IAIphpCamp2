<?php
require_once 'connect.php';

if (isset($_POST['action'])) {
	if ($_POST['action'] == 'checkProduct') {
		if (!isset($_POST['id'])) {
			echo "Podaj id";
			die();
		}
		$id = mysqli_real_escape_string($link,htmlentities($_POST['id']));
		$query="SELECT * from `product` WHERE id='$id'";
		if($result= mysqli_query($link,$query)){
			if (mysqli_num_rows($result)==0) {
				echo 'Brak porduktu o podanym id';
				die();
			}
			while ($data= mysqli_fetch_assoc($result)) {
				$name=$data['nazwa'];
				$price=$data['cena'];
				$id=$data['id'];
echo <<< show
	<input type="text" name="name" id="name" value="$name">
	<input type="text" name="price" id="price" value="$price">
	<button onclick="update($id)">Aktualizuj</button>
show;
			}
		}
	}
	if ($_POST['action'] == 'addProduct'){
		
		if (!isset($_POST['name'])) {
			echo"Podaj nazwę produktu";
			die();
		}
		if (!isset($_POST['price'])) {
			echo"Podaj nazwę produktu";
			die();
		}
		$name = mysqli_real_escape_string($link,htmlentities($_POST['name']));
		$price = mysqli_real_escape_string($link,htmlentities($_POST['price']));
		$query_ins="INSERT INTO `product` values(null,'$name','$price')";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			echo 'dodano';
		}
		
	}
	if ($_POST['action'] == 'updateProduct'){
		
		if (!isset($_POST['name'])) {
			echo"Podaj nazwę produktu";
			die();
		}
		if (!isset($_POST['price'])) {
			echo"Podaj cenę produktu";
			die();
		}
		if (!isset($_POST['id'])) {
			echo"Podaj id produktu";
			die();
		}
		$id=(int)$_POST['id'];
		$name = mysqli_real_escape_string($link,htmlentities($_POST['name']));
		$price = mysqli_real_escape_string($link,htmlentities($_POST['price']));
		$query_ins="UPDATE `product` set nazwa='$name',cena='$price' WHERE id = $id";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			echo 'zaktualizowano';
		}
		
	}

	
	if ($_POST['action'] == 'removeProduct') {
		if (!isset($_POST['id']) && !empty($_GET['id'])) {
			echo "Podaj id";
			die();
		}
		$id=(int)$_POST['id'];
		$query="SELECT * from `product` WHERE id='$id'";
		if($result= mysqli_query($link,$query)){
			if (mysqli_num_rows($result)==0) {
				echo('Brak porduktu o podanym id');
				die();
			}

		}

		$query_ins="DELETE FROM `product` WHERE id=$id";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			echo 'usunięto';
		}
		
	}
	if($_POST['action'] != 'checkProduct'){
	echo show();
}
}else{
	echo show();
	}
	function show()
	{
		global $link;
		$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			echo "<table border=1>";
	echo "<tr><td>id</td><td>name</td><td>price</td><td>atcion</td></tr>";

			while ($data= mysqli_fetch_assoc($result)) {
						
				echo '<tr><td>'.$data['id'].'</td><td>'.$data['nazwa'].'</td><td>'.$data['cena'].'</td><td><button type="button" onclick="del('.$data['id'].')">usuń</button> <button type="button" onclick="show_ins_form()">dodaj</button><button type="button" onclick="show_up_form('.$data['id'].')">aktualizuj</button></td></tr>';			
			}
			echo "</table>";
		}
	}