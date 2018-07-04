<?php

Class ProductVirtual {

    Private $ProductVirtualID;
    Private $ProductVirtualName;
    Private $ProductVirtualPrice;
    Private $ProductVirtualDescription;
    function __construct()
    {
        $this->ProductVirtualID = 1;
        $this->ProductVirtualName = "Cement";
        $this->ProductVirtualPrice = 25.4;
        $this->ProductVirtualDescription = "Cement jakis tam lorem impsum bla";
        print "Konstruktor<br>";
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "<br>DESTRUKCJA ! :)";
    }
    function SetPrice($Price)
    {
        $this->ProductVirtualPricePrice = $Price;
    }
    function GetPrice()
    {
        return $this->ProductVirtualPrice;
    }

}
