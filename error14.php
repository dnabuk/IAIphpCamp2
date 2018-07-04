<?php
error_reporting(E_ALL);


class A {
    protected $test = 'test';
    public function test()
    {
        return date('H:i:s');
    }
}
class B extends A {

    public function test()
    {
        return date('H:i:s');
    }
}
class E extends A {

    public function test()
    {
        return date('H:i:s');
    }
}
class D extends A {

    public function test()
    {
        return date('H:i:s');
    }
}
class C extends A {

    public function test()
    {
        return date('H:i:s');
    }
}
class G extends A{

    public function test2()
    {
        return date('H:i:s');
    }
}
$name = $_GET['name'];
var_Dump((new $name())->test());