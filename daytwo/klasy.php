<?php
class produkt extends wlasciwosci
{
    var $id;
    var $nazwa;
    var $waga;
    var $dlugosc;
    var $szerokosc;
    var $cena;
    var $zdjecie;
    var $opis;

    function __construct()
    {
        echo 'In constructor\n';
    $this->nazwa ="produkt";
    $this->id = 1;
    $this-> waga = 5;
    $this -> dlugosc = 10;
    $this -> szerokosc = 5;
    $this -> cena =100;
    $this -> zdjecie= 'jpg';
    $this -> opis ='jakis opis';


    }


}

