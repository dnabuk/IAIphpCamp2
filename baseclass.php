<!DOCTYPE html>
<html>
    <head>
        <title>product</title>
    </head>
    <body>
        <?php
            Class Baseclass{   
                protected $id;
                protected $nazwa;
                protected $cena;
                protected $waluta;
                protected $opis;
                protected $zdjecie;
                protected $rozmiar;
                
                function setWaluta($waluta)
                {
                    $this->waluta = $waluta;
                }
                
                function getWaluta()
                {
                   return $this->waluta;            
                }
                
                public function __set($name, $value)
                {
                    /*echo "<pre>";
                    var_dump(property_exists("Baseclass", $name));
                    echo "</pre>";
                    echo "<br/> <br/>";*/
                    echo "__set";
                    if(property_exists("Baseclass", $name))
                    {
                            $this->$name = $value;
                    echo "ustawiono $name w ".__class__." o wartości '$value'<br/>";
                    echo "<br/>";
                    }
                    else
                    {
                        throw new Exception('brak pola '. $name);
                    }
                }
                
                public function __get($name)
                {
                    echo "__get";
                    return $this->$name;
                }
 
                public function __call($name, $array)
                {
                    echo "Wywołanie metody $name.";
                }
                
                public function __isset($name) 
                {
                    echo "__isset";
                    return isset($this->$name);
                }
                
                public function __unset($name) 
                {
                    echo "__unset";
                }
            };
        ?>
    </body>
</html>

