<form method="POST">
	Name:<input type="text" name="name">
	Surname:<input type="text" name="surname">
	Gender:<select name='gender'>
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="unknow">Unknow</option>
	</select>
	Birth date:<input type="date" name="birth_date">
	Street:<input type="text" name="street">
	City:<input type="text" name="city">
	Postcode:<input type="text" name="post_code">
	<input type="submit" name='submit' value="Wyślij">
</form>


<?php 
require 'connect.php';

if(isset($_POST['name']))
{
	$name=$_POST['name'];
$surname=$_POST['surname'];
$gender='male';//$_POST['gender'];
$birth_date=$_POST['birth_date'];
$street=$_POST['street'];
$city=$_POST['city'];
$post_code=$_POST['post_code'];
	
	$query_ins="INSERT INTO `clients` values(null,'$name','$surname','$gender','$birth_date',12,'$street','$city','$post_code','1','')";
		
if(!$result= mysqli_query($link,$query_ins)){
		echo (mysqli_error($link));}else{
	echo 'wysłano';
}
}
//$query="SELECT name, surname, city FROM `clients` limit 10";
//while ($data= mysqli_fetch_assoc($result)) 
//	var_dump($data);
//}
?>