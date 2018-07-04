<?php
error_reporting(E_ALL);

class A {
    private $prefix = 'Pan(i)';
    public static function printName($name)
    {
        $ret = '';
        if (strlen($name) > 5) {
            $ret = $this->prefix . ' ' . $name;
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }

    public function printName2($name)
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

//echo A::printName($_GET['name']);
$asdf=new A();
echo $asdf->printName2($_GET['name']);