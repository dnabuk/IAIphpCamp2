<?php
	require_once("produkt_db.php");
	require_once("klasa_produkt.php");
	require_once("klasa_vir_produkt.php");
	$kubek=new produkt();
	$kubek->a=$id;
	try{
		$kubek->a=1;
		echo"wykonano";}
		catch (Exception $a){
			echo "błąd";
			}
	
	echo $kubek->getprice();
	
	//echo $kubek->nazwa;
	//echo $kubek->test();
	$kubek=null;
	echo "<br/>koniec<br/>";
	$program=new vir_produkt();
	//$program->setpar(1,"system","google",100,"1234");
	//$kubek->setpar(3,"nowy kubek","mercedes",10000,"jeszcze drozszy kubek");

	var_dump($kubek);
	echo "<br/><br/>";
	var_dump($program);
	die("koniec skryptu");
?>