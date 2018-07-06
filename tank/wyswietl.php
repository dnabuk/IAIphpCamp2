<head>
<link rel="Stylesheet" type="text/css" href="style.css"/>
</head>
<?php
require_once("stats.php");
require_once("show.php");

if(isset($_GET['stats'])){
	//if ($_GET['stats']=='1') 
		showStats();
}
if(isset($_GET['map'])){
	//if ($_GET['map']=='1') 
		showGame();
}
?>