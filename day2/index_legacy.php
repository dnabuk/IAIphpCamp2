<?php
$link = mysqli_connect("localhost","root", "" );
mysqli_select_db($link, "php_camp");
$handle = mysqli_query($link, "SELECT * FROM clients LIMIT 10");
foreach($handle as $row){
	foreach($row as $element){
	printf($element." ");
	
	}printf('<br>');

}
?>