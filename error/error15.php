<?php
error_reporting(E_ALL);

class A {
    private $prefix = 'Pan(i)';

    public function printName($name)
    {
        $ret = '';
        if (strlen($name) > 5) {
            $ret = $this->prefix . ' ' . $name;
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }
}

$object = new A;
echo $object->printName($_GET['name']);
//echo A::printName($_GET['name']);