<?php
class ProductBase{
    protected $id;
    protected $name;
    protected $color;
    protected $price;
    protected $description;
    protected $currency;


    public function __set($name, $value){
        echo "Ustawiam $name o wartości $value\n";
        if (property_exists($this, $name)){
            $this->name=$value;
        }else{
            throw new Exception('Division by zero.');
        }
    }

    public function __get($name){
        echo "Ustawiłem wartość $name";
        if (property_exists($this, $name)){
            return $this->name;
        }else{
            throw new Exception('Błąd z __get');
        }
    }

    public function __call($name, $arguments)
    {
        echo "Wołam z _call" . '<br/>';
    }


}