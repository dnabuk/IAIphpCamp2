<?php
class Product{
	public $id;
	public $name;
	public $photo;
	public $description;
	public $price;
	
	public function __construct($id, $name, $photo, $description, $price){
		$this->id = $id;
		$this->name = $name;
		$this->photo = $photo;
		$this->description = $description;
		$this->price = $price;
   }
   public function __destruct(){
		echo 'wywołanie destruktora<br>';
   }
   public function setProduct($newId, $newName, $newPhoto, $newDescription, $newPrice){
		$this->id = $newId;
		$this->name = $newName;
		$this->photo = $newPhoto;
		$this->description = $newDescription;
		$this->price= $newPrice;
   }
   public function getPrice(){
		return $this->price;
   }
}

echo 'start!<br>';
$pierwszyObiekt = new Product(1,'Kubek', './img/kubeczek.jpg', '-trzyma cieplo <br> -fajne toto' , 12);
echo $pierwszyObiekt->getPrice();
//$drugiObiekt = new Product(2,'Kubek na zimne napoje', './img/kubeczek2.jpg', '-trzyma zimno <br> -działa' , 15);
//var_dump($pierwszyObiekt);
echo '<br>';
//var_dump($drugiObiekt);
die('<br>kończe skrypt<br>');