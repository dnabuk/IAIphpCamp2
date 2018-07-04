<?php
class VirtualProduct {

    public $id_produktu,
        $nazwa_produktu,
        $zdjecie_produktu,
        $cena_produktu,
        $opis_produktu;

    public function __construct(){
        echo 'Konstruktor<br>';
        $this->id_produktu = 1;
        $this->nazwa_produktu = 'Monitor';
        $this->zdjecie_produktu = 'foto.jpg';
        $this->cena_produktu = '500';
        $this->opis_produktu = 'Dobry monitorek';
//var_dump($this);
    }

    public function __destruct(){
        echo '<br>Wywołanie destruktora';
    }

    public function dodajProdukt($id,$nazwa,$zdjecie,$cena,$opis){
        $this->id_produktu = $id;
        $this->nazwa_produktu = $nazwa;
        $this->zdjecie_produktu = $zdjecie;
        $this->cena_produktu = $cena;
        $this->opis_produktu = $opis;
    }
    public function ustawCene($cena){
        $this->cena_produktu = $cena;
        return $this->cena_produktu;
    }
    public function pobierzCene(){
//if($this->id_produktu == $id){
        return $this->cena_produktu;
//}
    }

}