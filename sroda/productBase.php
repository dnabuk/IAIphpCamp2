<?php

class ProductBase{
	protected $id;
	protected $name;
	protected $price;
	protected $currency;
	protected $desc;
	protected $photo;
	protected $reviews;

	
	function __construct(){
		$this->photo='konstruktorBazowy';
		
	}
	function __destruct(){
		//echo 'destruktor';
	}
	
	public function __isset($name){
		
		if (isset($this->$name)){ 
			echo 'Zmienna '.$name.' ma jakąś wartość';
			//return true;
		} else {
			echo 'Nie wpisano wartości zmiennej '.$name;
			return false;
		}
	}
	
	public function __unset($name){
		echo 'Zwalniam pole '.$name;
		$this->$name=null;
		unset($this->$name);
	}
	
	public function __call($name, $args){
		echo 'Wywołałeś nieistniejącą metodę "'.$name.'"';
	}
	
	public function __set($name, $val){
		//echo 'Ustawiam '.$name.' o wartości '.$val;
		if (property_exists($this, $name)){
			$this->$name = $val;
		} else {
			throw new Exception ('<p>Robię coś głupiego - zapis do nieistniejącego pola</p>');
		}
	}
	
	public function __get($name){
		//echo 'Ustawiam '.$name.' o wartości '.$val;
		if (property_exists($this, $name)){
			return $this->$name;
		} else {
			throw new Exception ('<p>Robię coś głupiego - odczyt z nieistniejącego pola</p>');
		}
	}
}
