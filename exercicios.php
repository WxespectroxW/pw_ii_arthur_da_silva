<?php
    //ex1
    function soma($num1, $num2) {

    $soma = $num1 + $num2;
    return $soma;
  
    }

    //ex2
    function area($b, $a){

        $area = ($b * $a) / 2;
        return $area;
    }

    //ex3
    function getlastitem($n1, $n2, $n3){
        
        $array = array($n1, $n2, $n3); 
        echo $array[2];
    }

    //ex5
    function totalPernas($g, $v, $p){

        $totalG = $g * 2;
        $totalV = $v * 4;
        $totalP = $p * 4;

        $totalPernas = $totalG + $totalV + $totalP;
        return $totalPernas;
    }

    //ex6
    function smallNumber($n1 , $n2){

        $n1 = 2;
        $n2 = 3;

    }


?>