<!DOCTYPE html>
<html>
    <head>
        <title>product</title>
    </head>
    <body>
        <?php

            Class Product extends Baseclass{   
                protected $id;
                protected $nazwa;
                protected $cena;
                protected $opis;
                protected $waga;
                protected $zdjecie;
                protected $wymiar;
            
                function __construct() //konstruktor, tworzy nowy obiekt
                {
                    echo 'konstruktor Product <br/>';
                    echo "<br/>";
                   $this->id = 1;
                   $this->nazwa = "kubek";
                   $this->cena = 50;
                   $this->opis = "fajny kubek";
                   $this->waga = 2;
                   $this->zdjecie = "zdjecie.jpg";
                   $this->wymiar = "5x10";
                }

                function setCena($cena) //ustawianie wartości
                {
                    $this->cena = $cena;
                }
                
                function getCena() //wyświetlanie wartości
                {
                   return $this->cena;            
                }
                
                function setRozmiar($rozmiar)
                {
                    $this->rozmiar = $rozmiar;
                }
                
                function getRozmiar()
                {
                   return $this->rozmiar;            
                }

                function __destruct() //destruktor, usuwa obiekt pod koniec skryptu
                {
                    echo 'destruktor Product <br/>';
                    echo "<br/>";
                }
            };
//          $pierwszy_obiekt = new Product(); //tworzy obiekt $pierwszy_obiekt
//          $pierwszy_obiekt->setCena(1000); //ustawia cenę obiektu $pierwszy_obiekt na 1000
//          echo $pierwszy_obiekt->getCena(); //wywołuje funkcję getCena drukując cenę
//          echo "<br/>";
//          $pierwszy_obiekt->a=1; //dodanie nowej zmiennej $a o wartości 1 do obiektu nowy_produkt
//            echo 'koniec <br/>';
//            var_dump($pierwszy_obiekt); //wyświetla informacje o obiekcie $pierwszy_obiekt
//            echo "<br/>";
//            die("koncze skrypt <br/>");
            ?>
    </body>
</html>


