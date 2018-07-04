<!DOCTYPE html>
<html>
    <head>
        <title>virtual</title>
    </head>
    <body>
        <?php

            Class Virtual extends Baseclass{   
                protected $id;
                protected $nazwa;
                protected $cena;
                protected $opis;
                protected $zdjecie;
                protected $zalacznik;
                protected $rozmiar;
                protected $klucz;
            
                function __construct() //konstruktor, tworzy nowy obiekt
                {
                    echo 'konstruktor Virtual <br/>';
                    echo "<br/>";
                   $this->id = 1;
                   $this->nazwa = "Gra o Tron";
                   $this->cena = 100;
                   $this->opis = "e-book Gry o Tron";
                   $this->zdjecie = "zdjecie2.jpg";
                   $this->zalacznik = "instrukcja.pdf";
                   $this->rozmiar = 1;
                   $this->klucz = 2;
                }

                function setRozmiar($rozmiar) //ustawianie wartości
                {
                    $this->rozmiar = $rozmiar;
                }
                
                function getRozmiar() //wyświetlanie wartości
                {
                   return $this->rozmiar;            
                }

                function __destruct() //destruktor, usuwa obiekt pod koniec skryptu
                {
                    echo 'destruktor Virtual <br/>';
                    echo "<br/>";
                }
            }; 
//          $drugi_obiekt = new Virtual(); //tworzy obiekt $drugi_obiekt
//          $drugi_obiekt->setCena(1000); //ustawia cenę obiektu $drugi_obiekt na 1000
//          echo $drugi_obiekt->getCena(); //wywołuje funkcję getCena drukując cenę
//          echo "<br/>";
//          $drugi_obiekt->a=1; //dodanie nowej zmiennej $a o wartości 1 do obiektu nowy_produkt
//            echo 'koniec <br/>';
//            var_dump($drugi_obiekt); //wyświetla informacje o obiekcie $drugi_obiekt
//            echo "<br/>";
//            die("koncze skrypt <br/>");
            ?>
    </body>
</html>

