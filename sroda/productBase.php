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
	
	public function __set($name, $val){
		//echo 'Ustawiam '.$name.' o wartości '.$val;
		if (property_exists($this, $name)){
			$this->$name = $val;
		} else {
			throw new Exception ('<p>Robię coś głupiego</p>');
		}
	}
	
	
	public function getPrice(){
		return $this->price.' '.$this->currency;
	}
	public function getName(){
		return $this->name;
	}
	public function getDesc(){
		return $this->desc;
	}
	public function getPhoto(){
		return $this->photo;
	}
	public function getReviews(){
		return $this->reviews;
	}
	public function getCurrency(){
		return $this->currency;
	}
	
}
