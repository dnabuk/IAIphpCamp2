<?php

class Product extends ProductBase {

	protected $size;
	protected $weight;
	

	public function __construct() {
		$this->name = "mug";
		$this->type = "dish";
		$this->price = 50;
		$this->size = "big";
		
	}

	public function setSize($size){
		$this->size = $size;
	}

	public function getSize() {
		return $this->size;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function getWeight() {
		return $this->weight;
	}

	


}

?>