<?php

Class ProductVirtual extends ProductBase{

   
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


    private function SetVirtualPrice($Price)
    {
        $this->ProductVirtualPrice = $Price;
    }
    private function GetVirtualPrice()
    {
        return $this->ProductVirtualPrice;
    }
    private function SetVirtualName($Name)
    {
        $this->ProductVirtualPrice = $Name;
    }
    private function GetVirtualName()
    {
        return $this->ProductVirtualName;
    }
  
    private function GetVirtualDescription()
    {
        return $this->ProductVirtualDescription;
    }
    private function SetVirtualDescription($desc)
    {
        $this->ProductVirtualDescription = $desc;
    }
  
    private function SetVirtualWeight($weight)
    {
        $this->ProductVirtualWeight = $weight;
    }
    private function GetVirtualWeight()
    {
        return $this->ProductVirtualWeight;
    }
    private function SetVirtualAttachment($attachment)
    {
        $this->ProductVirtualAttachment = $attachment;
    }
    private function GetVirtualAttachment()
    {
        return $this->ProductVirtualAttachment;
    }
    private function SetVirtualkey($key)
    {
        $this->ProductVirtualWeight = $key;
    }
    private function GetVirtualkey()
    {
        return $this->ProductVirtualkey;
    }
}
