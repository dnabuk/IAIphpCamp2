<?php
require_once('productbase.inc.php');

class Products extends Productbase
{
    protected
        $waga_produktu,
        $wymiar_produktu;


    public function __construct()
    {
        echo 'Konstruktor<br>';
        $this->id_produktu = 1;
        $this->nazwa_produktu = 'Monitor';
        $this->zdjecie_produktu = 'foto.jpg';
        $this->cena_produktu = '500';
        $this->opis_produktu = 'Dobry monitorek';
        $this->waga_produktu = '10';
        $this->wymiar_produktu = '10x10';
    }

    public function __destruct()
    {
        echo '<br>Wywołanie destruktora klasy produkt';
    }
/*
    public function ustawProdukt($id, $nazwa, $zdjecie, $cena, $opis,$waga,$wymiar)
    {
        $this->id_produktu = $id;
        $this->nazwa_produktu = $nazwa;
        $this->zdjecie_produktu = $zdjecie;
        $this->cena_produktu = $cena;
        $this->opis_produktu = $opis;
        $this->waga_produktu = $waga;
        $this->wymiar_produktu = $wymiar;
        //$this->waga_produktu = $waga;
    }

    public function ustawCene($cena)
    {
        $this->cena_produktu = $cena;
        return $this->cena_produktu;
    }

    public function pobierzCene()
    {
//if($this->id_produktu == $id){
        return $this->cena_produktu;
//}
    }
*/
}