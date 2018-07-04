<?php
class wlasciwosci
{
    protected $id, $nazwa, $waga, $dlugosc, $szerokosc, $cena, $zdjecie, $opis, $waluta;

    function __construct()
    {
        echo 'In constructor\n';
        $this->nazwa = "produkt";
        $this->id = 1;
        $this->waga = 5;
        $this->dlugosc = 10;
        $this->szerokosc = 5;
        $this->cena = 100;
        $this->zdjecie = 'jpg';
        $this->opis = 'jakis opis';
        $this->waluta = 'pln';

    }
//
//    function set_waluta($waluta)
//    {
//        $this->waluta = $waluta;
//    }
//
//    function getwaluta()
//    {
//        return $this->waluta;
//    }
//
//    function set_cena($cena)
//    {
//        $this->cena = $cena;
//    }
//
//    function set_opis($opis)
//    {
//        $this->opis = $opis;
//    }
//
//    function getprice()
//    {
//        return $this->cena;
//    }

    public function __set($name, $value)
    {
        echo "Ustawia $name o wartości $value";

    if(property_exists($name,$value)){
        $this->$name=$value;}
        else{throw new Exception('Brak');}
        echo "Ustawia $name o wartości $value";
}

    public function __get($name)
    {
        echo "Dostajemy '$name'\n";

        if (property_exists($this, $name)) {
            return $this->name;
        }
    }

    public function __call($name,$arg){
        echo "test";
        if(property_exists($name,$arg)){
        $this->$name=$arg;}
        else{throw new Exception('test');}
    }

    public function __isset($name){

        if (property_exists($name,$this)){
            $this->name;}
        return false;
    }

    public function __unset($name){
        echo 'test unset';
    }

}
