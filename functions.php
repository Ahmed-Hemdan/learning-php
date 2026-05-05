<?php
    function first(){
        echo "My first function<br>";
    }
    first();

    $name = "hemdan";
    function morning( $myName){
    echo "Hello ".$myName ."<br>";
    }
    morning($name);

    function sum($num1,$num2){
    return $num1+$num2;
    }

    $total= sum(5,6);

    echo $total;

?>