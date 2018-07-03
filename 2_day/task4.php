<?php 
require 'connect.php';
if(isset($_GET['p'])){
	$page=($_GET['p'])*100;
	
}else{$page=0;}
if(is_numeric($page)){
	$query="SELECT count(*) FROM `clients` GROUP by id";
	if($result= mysqli_query($link,$query)){
echo "Całkowita liczba wierszy: ";
echo $total=$result->num_rows;

	}
$query="SELECT * from `clients` limit $page,100";
if($result= mysqli_query($link,$query)){
	echo "<table border=1>";
	echo "<tr><td>id</td><td>name</td><td>surname</td><td>gender</td><td>Date of birth</td><td>orders count</td><td>street</td><td>city</td><td>post code</td><td>country</td></tr>";

while ($data= mysqli_fetch_assoc($result)) {
	
	echo '<tr><td>'.$data['id'].'</td><td>'.$data['name'].'</td><td>'.$data['surname'].'</td><td>'.$data['gender'].'</td><td>'.$data['date_of_birth'].'</td><td>'.$data['orders_count'].'</td><td>'.$data['street'].'</td><td>'.$data['city'].'</td><td>'.$data['postcode'].'</td><td>'.$data['country'].'</td></tr>';
}
echo "</table>";
}
}

if($page>99){echo '<a href="task4.php?p='.(($page-100)/100).'">Prev</a>';}
if(($page+100)<$total){echo '<a href="task4.php?p='.(($page+100)/100).'">Next</a>';}