<?php



$x =5; 
function test(){
    // global scope

    global $x;
echo "x=" .$x."<br>";
}
test();

    function globalAndLocal(){
    $x =2;
    echo "Local x = ".$x."<br>";
    echo "Global x = ".$GLOBALS["x"]."<br>";
    }

    globalAndLocal();



?>