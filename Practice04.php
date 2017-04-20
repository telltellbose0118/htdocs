<?php
/**
 * Created by PhpStorm.
 * User: tatsuki
 * Date: 2017/04/17
 * Time: 11:37
 */
echo "hello world";
class A{

    public $a;
    function __construct()
    {
        echo "A is loaded";
        $this->a = 1;
    }
}
const Aa = "a";
function getA(){
    return "Fa";
}