<?php
error_reporting(E_ALL);

class A {
    private static $prefix = 'Pan(i)';
    public static function printName($name)
    {
        $ret = '';
        if (strlen($name) > 5) {
            $ret = A::$prefix . ' ' . $name;
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }
}

echo A::printName($_GET['name']);