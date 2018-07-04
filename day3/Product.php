<?php
require_once('./Base.php');

class Product extends Base{
	public $weight;
	public $size;
	
	public function __construct($id, $name, $photo, $weight, $size, $description, $price, $currency){
		$this->id = $id;
		$this->name = $name;
		$this->photo = $photo;
		$this->weight = $weight;
		$this->size = $size;
		$this->description = $description;
		$this->price = $price;
		$this->currency = $currency;
   }
   public function __destruct(){
		//echo 'wywołanie destruktora<br>';
   }
   /*public function setProduct($newId, $newName, $newPhoto, $newWeight, $newSize, $newDescription, $newPrice, $newCurrency){
		$this->id = $newId;
		$this->name = $newName;
		$this->photo = $newPhoto;
		$this->weight = $newWeight;
		$this->size = $newSize;
		$this->description = $newDescription;
		$this->price= $newPrice;
		$this->currency = $newCurrency;
   }
   public function getPrice(){
		return $this->price;
   }*/
   public function __set($name, $value){
	   if(property_exists($this, $name)){
		$this->$name = $value;
	   }else{
		   throw new Exception('Nie masz takiej zmiennej');
	   }
		//echo '<br>Ustawiam '.$name.' o wartosci '.$value.'<br>';
   }
   
   public function __get($name){
	   if(property_exists($this, $name)){
		  return $this->$name;
	   }else{
		  throw new Exception('Nie masz takiej zmiennej');  
	   }
   }
   	public function __call($name, $arguments){
		echo 'Wywołano funkcję '.$name.', z argumentami '.implode(', ', $arguments).'<br>';
	}
	
	public function __isset($name){
		
		return isset($this->data[$name]);
	}
	
	public function __unset($name){
		$this->$name = null;
	}
}