<?php
error_reporting(E_ALL);

class A {
    private $prefix = 'Pan(i)';
	
	public function printName2($name) 
	{
		if (strlen($name) > 5) {
			$ret = $this->prefix . ' ' . $name;
		}
		else {
			$ret = 'Siemanko ' . $name;
		}
		return $ret;
	}
}

echo (new A)->printName2($_GET['name']);