<?php
	require_once('plik1Function.php');
	class VirtualProduct extends ProductBase
	{
		private $licenseKey;
		
		public function __construct()
		{
			echo "Stworzono wirtualny produkt<br>";
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
		
		public function SetValues($id, $name, $price, $picture, $licenseKey)
		{
			$this->id = $id;
			$this->name = $name;
			$this->price = $price;
			$this->picture = $picture;
			$this->licenseKey = $licenseKey;
			echo "<br><b>Stworzono wirtualny produkt:</b> ID = ".$this->id.", Nazwa = ".$this->name.", Cena = ".$this->price.", Obraz = ".$this->picture.", 
			, Klucz licencyjny = ".$licenseKey."<br>";
		}
	}
?>