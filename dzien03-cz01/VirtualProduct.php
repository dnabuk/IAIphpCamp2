<?php
	class VirtualProduct extends ProductBase 
	{
		private $typeOfFile;
		private $productKey;
		private $sizeOfFile;
				
		function __construct() 
		{
			$this->name = 'Atlas kotów';
			$this->id = 200000;
			$this->description = 'Wow musisz to mieć, mega ' . strtolower($this->name) .', wysyłka mailem w ciągu zaledwie pół roku!<br>';
			$this->price = 999;
		}
				
		function __destruct() 
		{
			echo "Destruktor";
		}
		
	}
?>