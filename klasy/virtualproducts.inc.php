<?php
require_once('productbase.inc.php');

class VirtualProducts extends Productbase {

public  $zalacznik_produktu,
        $klucz_produktu,
        $rozmiar_produktu;

    public function __construct(){
        echo 'Konstruktor<br>';
        $this->id_produktu = 1;
        $this->nazwa_produktu = 'Monitor';
        $this->zdjecie_produktu = 'foto.jpg';
        $this->cena_produktu = '500';
        $this->opis_produktu = 'Dobry monitorek';
        $this->zalacznik_produktu = 'ddd.pl';
        $this->klucz_produktu = '10';
        $this->rozmiar_produktu = '10GB';
    }

    public function __destruct(){
        echo '<br>Wywołanie destruktora klasy wirtualny produkt';
    }
}