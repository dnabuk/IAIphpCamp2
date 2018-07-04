<?php
define('ILOSC_WYNIKOW_NA_STRONIE', 100);

$SQL = "SELECT SQL_CALC_FOUND_ROWS * 
       FROM a_major 
       ORDER BY date ASC 
       LIMIT ".((int)$_GET['porcja']*ILOSC_WYNIKOW_NA_STRONIE).",".ILOSC_WYNIKOW_NA_STRONIE;
$RES = ($SQL);
while($AFR = mysql_fetch_assoc($RES)){
   echo 'tytuł: '.$AFR['Title'].'<br />';
}


$SQL = "SELECT FOUND_ROWS() as Ilosc";
$RES= mysql_query($SQL);
list($iloscWpisow) = mysql_fetch_row($RES);

if($_GET['porcja']>0){

   echo '<a href="?porcja='.($_GET['porcja']-1).'">Poprzednie</a> ';
}

for($i = 0;$i<=floor($iloscWpisow/ILOSC_WYNIKOW_NA_STRONIE);$i++){
   echo '<a href="?porcja='.($i).'">[ '.($i+1).' ]</a> ';
}

if($_GET['porcja']<floor($iloscWpisow/ILOSC_WYNIKOW_NA_STRONIE)){

   echo ' <a href="?porcja='.($_GET['porcja']+1).'">następne</a>';
}
?>

SELECT SQL_CALC_FOUND_ROWS
SELECT FOUND_ROWS()
    SELECT ... LIMIT x,y




mysqli_close($link);
