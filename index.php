<?php 
include("connect.php");
function wysw(){
	$zap="select * from products;";
				$wynik=mysqli_query($link,$zap);
				while($k=mysqli_fetch_assoc($wynik)){
					echo $k['id']." ". $k['nazwa']." ". $k['cena']."<br/>";}}
if((isset($_GET['id']))
	&&(isset($_GET['action']))
	&&(isset($_GET['name']))
	&&(isset($_GET['price']))){
		$id=$_GET['id'];
		$name=$_GET['name'];
		$price=$_GET['price'];
		$action=$_GET['action'];
		switch ($action) {
			case 'checkProduct':
				$zap="select * from products where nazwa='$name'";
				$wynik=mysqli_query($link,$zap);
				while($k=mysqli_fetch_assoc($wynik)){
					echo $k['id']." ". $k['nazwa']." ". $k['cena']."<br/>";}
				break;
			case 'addProduct':
				$zap="insert into products(id,nazwa,cena)values('$id','$name','$price');";
				mysqli_query($link,$zap);
				wysw();
				break;
			
			case 'removeProduct':
				$zap="delete from products where id='$id';";
				mysqli_query($link,$zap);
				wysw();
				break;
			default:echo"zła akcja<br/>";break;
			};
		}else{
			echo "błąd";}
?>