<?php

Class ProductBase
{

    Public $ProductBaseWeight;
    Protected $ProductBaseCurrency;


     function __construct()
    {
        $this->ProductBaseWeight = 100;
        $this->ProductBaseCurrency = "PLN";


    }

    public function __set($property, $value)
    {
        if(property_exists($this,$property)){
        $this->property = $value;
    }else{
            echo"No Exaption";

        }
    }


    public function __get($property)
    {
        if(property_exists($this,$property)){
            return $this->property;
        }else{
            echo"No Exaption";

        }
    }

    public function __call($name,$args)
    {
    echo $name;
    var_dump($args);
    }

    public function __isset($property)
    {
     return $this->property;
    }

    public function __unset($property)
    {
        return $this->property;
    }

}