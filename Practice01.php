<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="T.ishikawa">
    <meta name="keywords" content="PHP Practice01">
    <meta name="descripton" content="this file is made for purpose to practice using PHP">
    <meta charset="UTF-8">
    <title>Practice01</title>
</head>
<body>
    <h1>A</h1>
    <h1>B</h1>
    <?php echo "Hello World<br>";?>
    <?php echo "B";?>
    <?php $A = array(1,2,"s");
        var_dump($A);
        echo $A;
        class A
        {
            private $a;
            public static $b = 3;

            /**
             * @return mixed
             */
            public function getA()
            {
                return $this->a;
            }

            /**
             * @param mixed $a
             */
            public function setA($a)
            {
                $this->a = $a;
            }
        }
        $A = new A();
        $A.setA("aa");
        echo $A.getA();
        echo $A->b;
    ?>
    <h1>C</h1>
</body>
</html>