<?php

class ProductBase {

	protected $id;
	protected $type;
	protected $name;
	protected $price;
	protected $description;
	protected $photo;
	protected $currency;

	public function __set($name, $value) {

		if (property_exists($this, $name)) {
			$this->name = $value;
		}

		else {
			throw new Exception("Błąd funkcji set! <br />");
		}

		echo "Ustawiam $name o wartości $value";
	}

	public function __get($name) {

		if (property_exists($this, $name)) {
			return $this->name;
		}

		else {
			throw new Exception("Błąd funkcji get! <br />");
		}

	}

	public function __call($name, $args) {
		echo "Nieistniejąca metoda: ".$name."<br />";

	}

	public function __isset($name) {
        echo "Zmienna ustawiona <br />";
        return isset($this->$name);

	}

	public function __unset($name){
		echo "Unsetting $name <br />";
        unset($this->$name);
	}


}

?>