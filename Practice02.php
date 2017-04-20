<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: tatsuki
 * Date: 2017/04/12
 * Time: 11:10
 */
    $b = "b";
class B{

}
?>
<h1>02</h1>
<?php
    $GLOBALS["a"] = "A";
    echo $c;
    echo "c",PHP_EOL;
    echo $b;
    echo $a;
    echo $GLOBALS["c"];
    $e = function ($times = 2){
        return function ($v) use(&$times){
          return pow($v,$times);
        };
    };
    $f = $e(3);
    echo $f(5),PHP_EOL;
    echo $e(5)(3),PHP_EOL;
    echo ($e(5))(2),PHP_EOL;
?>
</body>
</html>