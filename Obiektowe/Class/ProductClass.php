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
    public function SetPrice($Price)
    {
        $this->ProductPrice = $Price;
    }
    public function GetPrice()
    {
        return $this->ProductPrice;
    }
    public function SetDescription($desc)
    {
        $this->ProductDescription = $desc;
    }
    public function GetDescription()
    {
        return $this->ProductDescription;
    }
    public function SetName($name)
    {
        $this->ProductName = $name;
    }
    public function GetName()
    {
        return $this->ProductName;
    }


}
