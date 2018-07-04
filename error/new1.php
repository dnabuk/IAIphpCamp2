<?php
error_reporting(E_ALL);

class A {
    private $prefix = 'Pan(i)';
    public function printName($name)
    {
		$prefix = 'Pan(i)';
        $ret = '';
        if (strlen($name) > 5) {
            $ret = $prefix . ' ' . $name;
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }
}
echo (new A)->printName($_GET['name']);