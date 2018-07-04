<?php
	class Product extends ProductBase
	{
		private $size;
		private $weight;
		private $dimensions;
		
		function __construct() 
		{
			$this->name = 'Kubek termiczny';
			$this->id = 1;
			$this->size = 'S';
			$this->description = 'Wow musisz to mieć, mega ' . strtolower($this->name) .', luksusowy przedmiot sprowadzony aż z Chin! <br> Kolor: czerwony<br>Pojemność: 0.5 l<br>';
			$this->price = 100;
		}
				
		function __destruct() 
		{
			echo "Destruktor";
		}
		
	}
?>