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
class G { //można było extends

    public function test2()
    {
        return date('H:m:s');
    }
}
if (isset($_GET['name'])){
	$name = strtoupper($_GET['name']);
	switch ($name){
		case 'A':
		case 'B':
		case 'C':
		case 'D':
		case 'E':var_Dump((new $name())->test()); break;
		case 'A':var_Dump((new $name())->test2());
		default: die;
	}
}