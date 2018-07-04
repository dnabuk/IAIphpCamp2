<!DOCTYPE html>
<html>
<body>
<?php
$link = mysqli_connect ("127.0.0.1", "root", "");
mysqli_select_db($link, "phpcamp_apabisiak");

	$query = 'SELECT * FROM clients where id=' . $_GET['id'];
	
	if ($result->num_rows>0){
		while($row = $result->fetch_assoc()){
		echo $row['id'] . ' ' . $row['name'] . ' ' .$row['gender'];
		}
	}
       
            
        

?>
</body>
</html>