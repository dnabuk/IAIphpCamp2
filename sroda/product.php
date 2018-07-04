<?php

class Product extends productBase{
	private $weight;
	private $dimensions;

	
	function __construct(){

	}
	function __destruct(){
		//echo 'destruktor';
	}
	
	public function setWeight($t){
		$this->weight=$t;
	}
	public function setDimensions($t){
		$this->dimensions=$t;
	}
	
	public function getWeight(){
		return $this->weight;
	}
	public function getDimensions(){
		return $this->dimensions;
	}
	
}
