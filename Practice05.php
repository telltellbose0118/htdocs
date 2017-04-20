<?php
ini_set("display_errors",1);
/**
 * Created by PhpStorm.
 * User: tatsuki
 * Date: 2017/04/18
 * Time: 15:31
 */
echo "require",PHP_EOL;
require 'Practice04.php';
$a = new A();
echo $a->a;
require_once "Practice04.php";
echo "const",PHP_EOL;
echo Aa;
$b = new stdClass();
class Foo{
    static function hello(){
        echo __CLASS__,"hello",PHP_EOL;
    }
}
class Bar extends Foo {
    static function hello()
    {
        echo __CLASS__,"hello",PHP_EOL;
        parent::hello();
    }
}
$bar = new Bar();
$bar->hello();