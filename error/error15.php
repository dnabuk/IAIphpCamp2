<?php
error_reporting(E_ALL);

class A {
    private $prefix = 'Pan(i)';
    public function printName($name)
    {
        $ret = '';
        if (strlen($name) > 5) {
            $ret = $this->prefix . ' ' . $name; //brakuje prefiksu
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }
}

if (isset($_GET['name']))echo (new A)->printName($_GET['name']);