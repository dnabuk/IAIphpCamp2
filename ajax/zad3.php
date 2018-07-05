<html>
<head>
<meta charset="UTF-8" />
<style>
.wyglad{
		border: solid 1px;
		text-align: center;
	}
	
	.wyglad td, tr, th{
		border: solid 1px;
		width: 100px;
		height: 45px;
	}
</style>
</head>

<?php 

	
function table(){
	$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");
	
	
	echo '<div id="demo"><table class="wyglad">';
	echo "<tr><th>ID</th>";
	echo "<th>NAZWA</th>";
	echo "<th>CENA</th>";
	echo "<th>OPERACJE</th></tr>";
	
	$new = "";
	
	$query = "select * from products";
	$sql = mysqli_query($connect, $query);

	while($wynik=mysqli_fetch_assoc($sql))
	{
		$new .= "<td>".$wynik['id']."</td>";
		$new .= "<td>".$wynik['name']."</td>";
		$new .= "<td>".$wynik['price']."</td>";
		$new .= '<td><button onclick="usun('.$wynik['id'].')">USUŃ</button></td></tr>';
	}
	echo $new;
	echo "</table></div>";
}

function delete($nr){
	$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");
	$query = "DELETE FROM products WHERE id =$nr";
	$sql = mysqli_query($connect, $query);
}
?>
