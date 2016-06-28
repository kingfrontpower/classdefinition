<!doctype html><!--宣告文件類型-->
<html lang="zh-tw"><!--指定網頁使用語言-->
    <head><!--文件的標頭-->
        <meta charset="utf-8"><!--指定網頁的編碼-->
        <!--
        To change this license header. choose License Headers in Project Properties.
        To change this template file, choose Tools/ templates 
        and open the template in the editor .
        -->
        <title>mvc consturct</title><!--文件標題-->      
    </head>
    <body> <!--文件主體-->
        <?php

        class Cat {

//            public $name;
            protected $name;
            protected $position;

            public function __construct($name) { //方法,建構子
                $this->name = $name;
                $this->position = ['x' => 0, 'y' => 0];
            }

            public function setName($name) {
                $this->name = $name;
            }
            public function gettName($name) {
                return $this->name;
            }

            public function moveTo($x, $y) {
                $this->position['x'] = $x;
                $this->position['y'] = $y;
                return $this->position;
            }

            public function move($x, $y) {
                $this->position['x'] += $x;
                $this->position['y'] += $y;
                return $this->position;
            }

            public function resetPosition() {
                $this->moveTo(0, 0);
                return $this->position;
            }

        }

        $pet = new Cat("Kitty");
        echo $pet->name;
        echo "<br>";
        $pet->name = "Hello Kitty";
        echo $pet->name;
        echo "<br>";

        $movePosition = $pet->moveTo(3, 5);
        echo "(" . $movePosition['x'] . "," . $movePosition['y'] . ")";
        echo "<br>";

        $movePosition = $pet->move(5, 3);
        echo "(" . $movePosition['x'] . "," . $movePosition['y'] . ")";
        echo "<br>";
        ?>
    </body>	  
</html>