<?php
	require_once('plik1Function.php');
	class Product extends ProductBase
	{
		private $height;
		private $width;
		private $wage;
		
		public function __construct()
		{
			echo "Stworzono produkt<br>";
		}
		
		public function __destruct()
		{
			echo "Zniszczono produkt<br>";
		}
		
		public function SetPrice($newPrice)
		{
			$this->price = $newPrice;
		}
		
		public function GetPrice()
		{
			return $this->price;
		}
		
		public function GetWage()
		{
			return $this->wage;
		}
		
		public function SetValues($id, $name, $price, $picture, $height, $width, $wage)
		{
			$this->id = $id;
			$this->name = $name;
			$this->price = $price;
			$this->picture = $picture;
			$this->height = $height;
			$this->width = $width;
			$this->wage = $wage;
			echo "<b>Stworzono produkt:</b> ID = ".$this->id.", Nazwa = ".$this->name.", Cena = ".$this->price.", Obraz = ".$this->picture.", 
			Wysokość = ".$this->height.", Szerokość = ".$this->width.", Waga = ".$this->wage."<br>";
		}
	}
?>