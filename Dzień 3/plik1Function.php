<?php

class ProductBase
{
	protected $id;
	protected $name;
	protected $price;
	protected $picture;
	protected $currency;
	
	function __construct()
	{
		echo "ProductBase";
	}
	
	/*
	public function SetBaseValues($id, $name, $price, $picture, $currency)
	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->picture = $picture;
		$this->currency = $currency;
		echo "<br><b>Stworzono produkt o zmiennych bazowych:</b> ID = ".$this->id.", Nazwa = ".$this->name.", Cena = ".$this->price.", Obraz = ".$this->picture.", 
		Waluta = ".$this->currency."<br>";
	}
	*/
	public function __set($name, $value)
	{
		if(property_exists($this, $name))
		{
			$this->name = $value;
			echo "Ustawiam ".$name." o wartości ".$value;
		}
		else
		{
			throw new Exception('Nie ma takiej zmiennej');
		}
	}
	
	public function __get($name)
	{
		if(property_exists($this, $name))
		{
			return $name;
		}
		else
		{
			throw new Exception('Nie ma takiej zmiennej');
		}
	}
	
	public function __call($name, array $params)
	{
		echo "Próbuję wykonać funkcję ".$name;
	}
	
	public function __isset($name)
	{
		if($name)
			true;
		else
			false;
	}
	
	public function __unset($name)
	{
		echo "Usuwasz ".$name;
	}
}
?>