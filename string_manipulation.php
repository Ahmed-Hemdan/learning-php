<?php 


$hello = "hello every body";

echo strlen($hello)."<br>";
echo strpos($hello , "l")."<br>";
echo strpos($hello , "e" ,5)."<br>";
echo strtoupper($hello)."<br>";
echo strtolower($hello)."<br>";
echo str_replace("hello","hi", $hello)."<br>";
echo str_repeat($hello."<br>",5)."<br>";
echo ucfirst($hello)."<br>";
echo lcfirst($hello)."<br>";
echo str_word_count($hello)."<br>";
echo strrev($hello)."<br>";


$name ="        Ahmed           ";

echo strlen($name)."<br>";
echo trim($name)."<br>";

    $name = "<b>Ahmed</b>";
    echo $name."<br>";
    echo strip_tags($name)."<br>";

$name = strip_tags($name);

$y = substr($hello,0,5).$name; 

echo $y."<br>";

// there is a lot more you can try it with yourself <3


?>