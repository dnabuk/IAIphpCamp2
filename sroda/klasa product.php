<?php

class Product{
	public $id;
	public $name;
	public $price;
	public $desc;
	public $photo;
	public $type;
	public $reviews;
	
	function __construct(){
		$this->id=1;
		$this->name='Rower';
		$this->price='1000000';
		$this->desc='Super rower';
		$this->photo='https://cdn.shopify.com/s/files/1/1204/3402/products/Cypress-Black_1024x1024.jpg?v=1480613608';
		$this->type='rower';
		
	}
	function __destruct(){
		//echo 'destruktor';
	}
}

$towar = new Product();
var_dump($towar);