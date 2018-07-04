<?php
	class ProductBase
	{
		protected $name;
		protected $id;
		protected $description;
		protected $photo;
		protected $price;
		protected $currency;
		
		public function __set($name, $value) 
		{
			if (property_exists($this, $name)) {
				$this->name = $value;
			}
			else {
				throw new Exception("Właściwość $name nie istnieje, nie dodam tej wartości"); 
			}
		}
		
		
		public function __get($name) 
		{
			if (property_exists($this, $name)) {
				return $this->name;
			}
			else {
				throw new Exception("Właściwość $name nie istnieje, to jak mam ją wyświetlić?!");
			}
		}
		
		public function __call($name, $arguments) 
		{
			echo "Próbuję wywołać metodę $name<br>";
		}
		
		public function __isset($name) 
		{
			echo "Wywołuję isset";
			return isset($this->$name);
		}
		
		public function __unset($name) 
		{
			echo "Wywołuję unset";
		}
		
	}
?>