<?php


class Productbase
{
    public $id_produktu,
        $nazwa_produktu,
        $zdjecie_produktu,
        $cena_produktu,
        $opis_produktu,
        $waluta;

    public function __set($id, $w)
    {
        if (property_exists($this, $id)) {
            echo 'Ustawiam ' . $id . ' o wartosci ' . $w;
        } else {
            throw new Exception('Nie ma takiej wartości');
        }
    }
    public function __get($id){
        echo '<br>'.$id;
    }

}