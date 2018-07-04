<?php

Class Product {

    Private $ProductID;
    Private $ProductName;
    Private $ProductPrice;
    Private $ProductDescription;
    function __construct()
    {
        $this->ProductID = 1;
        $this->ProductName = "Cement";
        $this->ProductPrice = 25.4;
        $this->ProductDescription = "Cement jakis tam lorem impsum bla";
        print "Konstruktor<br>";
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "<br>DESTRUKCJA ! :)";
    }
    function SetPrice($Price)
    {
        $this->ProductPrice = $Price;
    }
    function GetPrice()
    {
        return $this->ProductPrice;
    }
}

$wywolaj_obj = new Product();
$wywolaj_obj ->test="tutaj cos NOWEGO";
var_dump($wywolaj_obj);

$wywolaj_obj->SetPrice(30);
var_dump($wywolaj_obj);
    echo "wypluj coś na koncu";

$wywolaj_obj ->GetPrice();
var_dump($wywolaj_obj);
die("koncze skrypt");