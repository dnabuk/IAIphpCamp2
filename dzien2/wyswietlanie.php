<html>
<head>
	<style>
	.pagination {
		display: inline-block;
	}

	.wyglad{
		border: solid 1px;
		text-align: center;
	}
	
	.wyglad td, tr{
		border: solid 1px;
	}
	

	.pagination a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
		transition: background-color .3s;
		border: 1px solid #ddd;
	}

	.pagination a.active {
		background-color: #4CAF50;
		color: white;
		border: 1px solid #4CAF50;
	}

	.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>
<?php 
$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
$liczba_wierszy = 100;
$query = "select count(*) as ilosc from clients";

$zapytanie = mysqli_query($link, $query);
	$wynik = mysqli_fetch_assoc($zapytanie);
	$liczba_klientow = $wynik['ilosc'];
$strony = ceil($liczba_klientow/$liczba_wierszy);
echo "Liczba klientów: $liczba_klientow <br/><br/><br/>";
if(isset($_GET['page']))$page = $_GET['page'];
else $page = 1 ;
echo "<div class=\"pagination\">";
if($page == 1)
{
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page=1 > &lt;&lt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page=' . $page . '>'.$page.'</a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.($page+1).' > &gt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.$strony.' > &gt;&gt; </a>'.' ';
	
}

else if($page == $strony)
{
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page=1 > &lt;&lt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.($page-1).' > &lt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page=' . $page . '>'.$page.'</a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.$strony.' > &gt;&gt; </a>'.' ';
}

else {
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page=1 > &lt;&lt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.($page-1).' > &lt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page=' . $page . '>'.$page.'</a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.($page+1).' > &gt; </a>'.' ';
	echo '<a href='. $_SERVER['PHP_SELF'] . '?page='.$strony.' > &gt;&gt; </a>'.' ';
}

echo "</div><br/><br/>";



$offset = ($page-1) * $liczba_wierszy;

$query = "select * from clients limit $liczba_wierszy offset $offset ";
	$zapytanie = mysqli_query($link, $query);
	
	if($page == 1) $j = 1;
	else $j = $offset + 1;
	$nowa ="<table class=\"wyglad\"style=\"border: solid 1px;\"><tr ><td style=\"width:60px\">LP</td>
			<td style=\"width:120px\">IMIE</td><td style=\"width:150px\">NAZWISKO</td>
			<td style=\"width:90px\">PŁEĆ</td><td style=\"width:180px\">DATA URODZENIA</td>
			<td style=\"width:100px\">LICZBA ZAMÓWIEŃ</td><td style=\"width:200px\">ULICA</td>
			<td style=\"width:150px\">MIASTO</td><td style=\"width:100px\">KOD POCZTOWY</td>
			<td style=\"width:100px\">PAŃSTWO</td><td>NOTATKI</td></tr>";
			
	while($wynik = mysqli_fetch_assoc($zapytanie)){
		$nowa .= "<tr><td>$j</td>";
		$j++;
		$nowa .= "<td>" . $wynik['name'] . " </td><td> ". $wynik['surname'];
		$nowa .= " </td><td> " . $wynik['gender'] . " </td><td> "  . $wynik['date_of_birth'];
		$nowa .= " </td><td> " . $wynik['orders_count'] . " </td><td> " .$wynik['street']. " </td><td> ". $wynik['city'];	
		$nowa .= " </td><td> ". $wynik['postcode'] . " </td><td> " . $wynik['country'] . "</td><td>" . $wynik['notes'] ." </td></tr> ";
	}
	$nowa .= "</table>";
	echo $nowa;
?>
</body>
</html>