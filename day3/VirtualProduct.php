<?php
require_once('./Base.php');

class VirtualProduct extends Base{
	public $attachment;
	public $keys;
	public $sizeOfFile;
	
	/*public function setVirtualProduct($newId, $newName, $newPhoto, $newDescription, $newAttachment, $newKeys, $newSizeOfFile, $newPrice, $newCurrency){
		$this->id = $newId;
		$this->name = $newName;
		$this->photo = $newPhoto;
		$this->description = $newDescription;
		$this->attachment = $newAttachment;
		$this->keys = $newKeys;
		$this->sizeOfFile = $newSizeOfFile;
		$this->price= $newPrice;
		$this->currency = $newCurrency;
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
   
}