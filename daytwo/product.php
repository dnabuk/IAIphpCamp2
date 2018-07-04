<?php
class produkt2 extends wlasciwosci
{

    var $rozmiar;
    var $klucz;

    function __construct()
    {
        echo 'In constructor\n';
        $this->nazwa ="produkt2";
        $this->id = 2;
        $this-> rozmiar = 7;
        $this -> cena =100;
        $this -> zdjecie= 'dwa.jpg';
        $this -> opis ='jakis opis 2';
        $this -> klucz =6543333;
    }



function set_klucz($klucz){
        $this->klucz=$klucz;
}
    function set_rozmiar($rozmiar){
        $this->rozmiar=$rozmiar;
    }



}


