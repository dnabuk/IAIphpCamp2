<?php
class Base{
	public $id;
	public $name;
	public $photo;
	public $description;
	public $price;
	public $currency;
	
	/*public function setBase($newId, $newName, $newPhoto, $newDescription, $newPrice, $newCurrency){
		$this->id = $newId;
		$this->name = $newName;
		$this->photo = $newPhoto;
		$this->description = $newDescription;
		$this->price= $newPrice;
		$this->currency = $newCurrency;
   }*/	
   	public function getBase(){
		return $this->id.' '.$this->name.' '.$this->photo.' '.$this->description.' '.$this->price.' '.$this->currency;
   }	
   
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
		
		return isset($this->$name);
	}
	public function __unset($name){
		$this->$name = null;
	}
	
}