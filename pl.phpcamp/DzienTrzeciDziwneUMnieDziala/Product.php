<?php
class Product{

    public $id;
    public $name;
    public $color;
    public $price;
    public $width;
    public $height;
    public $weight;
    public $description;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $color
     * @param $price
     * @param $width
     * @param $height
     * @param $weight
     * @param $description
     */
    public function __construct(){
        $this->id = "1";
        $this->name = "Kubek";
        $this->color = "zielony";
        $this->price = 40;
        $this->width = 9;
        $this->height = 14;
        $this->weight = 0.9;
        $this->description = "Super kubek, który trzymał kiedyś ciepło";
    }

    public function __destruct(){
        echo '<br />' .'destruktor'. '<br/>';
    }


}

$product1 = new Product();
$product1-> a = 1;
echo '<pre>';
print_r($product1);
echo '</pre>';
echo '<pre>';
var_dump($product1);
echo '</pre>';
die('koncze');
