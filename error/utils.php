<?php

error_reporting(E_ALL);



class Utils {
    public static function fooConstInit()
    {
        defined('FOO') or define('FOO', 'foo');
    }
}

class Z {
    public function testB() {
        var_Dump(debug_backtrace(0));
    }
}

class X {
    public function testA($arg)
    {
        $arg->testB();
    }
}
