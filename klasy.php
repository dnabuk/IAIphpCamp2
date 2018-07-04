<?php
require_once('./klasabaza.php');

class Product extends Base{
    public $weight;
    protected $size;

    public function __construct($id, $name, $photo, $weight, $size, $description, $price, $currency){
        $this->id = $id;
        $this->name = $name;
        $this->photo = $photo;
        $this->weight = $weight;
        $this->size = $size;
        $this->description = $description;
        $this->price = $price;
        $this->currency=$currency;
    }
    public function __destruct(){
        echo 'wywołanie destruktora<br>';
    }
    public function setProduct($newId, $newName, $newPhoto, $newWeight, $newSize, $newDescription, $newPrice, $newCurrency){
        $this->id = $newId;
        $this->name = $newName;
        $this->photo = $newPhoto;
        $this->weight = $newWeight;
        $this->size = $newSize;
        $this->description = $newDescription;
        $this->price= $newPrice;
        $this->currency=$newCurrency;
    }
    public function getPrice(){
        return $this->price;
    }
}