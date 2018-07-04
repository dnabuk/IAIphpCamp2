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
        echo 'Ustawiam ' . $id . ' o wartosci ' . $w;
    }

    public function ustawWalute($w)
    {
        return $this->waluta = $w;
    }

    public function pobierzWalute()
    {
        return $this->waluta;
    }

    public function ustawIdProduktu($w)
    {
        return $this->id_produktu = $w;
    }

    public function pobierzIdProduktu()
    {
        return $this->id_produktu;
    }

    public function ustawNazwe($w)
    {
        return $this->nazwa_produktu = $w;
    }

    public function pobierzNazwe()
    {
        return $this->nazwa_produktu;
    }

    public function ustawZdjecie($w)
    {
        return $this->zdjecie_produktu = $w;
    }

    public function pobierzZdjecie()
    {
        return $this->zdjecie_produktu;
    }

    public function ustawCene($w)
    {
        return $this->cena_produktu = $w;
    }

    public function pobierzCene()
    {
        return $this->cena_produktu;
    }

    public function ustawOpis($w)
    {
        return $this->opis_produktu = $w;
    }

    public function pobierzOpis()
    {
        return $this->opis_produktu;
    }

}