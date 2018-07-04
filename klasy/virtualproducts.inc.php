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

    public function ustawProdukt($id,$nazwa,$zdjecie,$cena,$opis,$zalacznik,$klucz,$rozmiar){
        $this->id_produktu = $id;
        $this->nazwa_produktu = $nazwa;
        $this->zdjecie_produktu = $zdjecie;
        $this->cena_produktu = $cena;
        $this->opis_produktu = $opis;
        $this->zalacznik_produktu = $zalacznik;
        $this->klucz_produktu = $klucz;
        $this->rozmiar_produktu = $rozmiar;
    }
    public function ustawCene($cena){
        return $this->cena_produktu = $cena;;
    }
    public function pobierzCene(){
        return $this->cena_produktu;
    }

}