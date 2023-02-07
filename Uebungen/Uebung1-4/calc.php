<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $res=0;

    //http://m151.test/Uebungen/Uebung1-4/calc.php?x=2&y=3&operator=+

    if ($_GET['operator']) {
        $operator = $_GET['operator'];
        if($operator=="-"){
            $res=intval($x-$y); 
            echo " {$res}";
        }
        else if($operator=="+"){
            $res=intval($x+$y); 
            echo " {$res}";
        }
        else if($operator=="*"){
            $res=intval($x*$y); 
            echo " {$res}";
        }
        else if($operator=="/"){
            $res=intval($x/$y); 
            echo " {$res}";
        }


    }

?>