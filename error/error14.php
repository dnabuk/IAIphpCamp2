<?php
error_reporting(E_ALL);


class A {
    private $test = 'test';
    public function test()
    {
        return date('H:m:s');
    }
}
class B extends A {

    public function test()
    {
        return date('H:m:s');
    }
}
class E extends A {

    public function test()
    {
        return date('H:m:s');
    }
}
class D extends A {

    public function test()
    {
        return date('H:m:s');
    }
}
class C extends A {

    public function test()
    {
        return date('H:m:s');
    }
}
class G {

    public function test()
    {
        return date('H:m:s');
    }
}
$name = $_GET['name'];
if(class_exists($name)){
var_Dump((new $name())->test());}
else{
    echo 'Funkcja nie istnieje';
}