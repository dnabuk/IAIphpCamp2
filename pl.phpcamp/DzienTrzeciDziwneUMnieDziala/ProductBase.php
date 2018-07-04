<?php
class ProductBase{
    protected $id;
    protected $name;
    protected $color;
    protected $price;
    protected $description;
    protected $currency;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }


    public function __set($name, $value){
        echo "Ustawiam $name o wartości $value\n";
        if (property_exists($this, $name)){
            $this->name=$value;
        }else{
            throw new Exception('Division by zero.');
        }
    }

    public function __get($name){
        /*echo "Ustawiłem wartość $name";
        if (property_exists($this, $name)){
            return $this->name;
        }else{
            throw new Exception('Błąd z __get');
        }*/
        return $this->name;

    }


}