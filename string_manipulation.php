<?php 


$hello = "hello every body";

echo substr($hello,0,5)."<br/>"; // this function to get part of string
echo strpos($hello , "llo")."<br/>"; // this function to get the position of string in your string 
echo strpos($hello , "e", 3)."<br/>"; // this function to get the position of string in your string but start search from position 3
echo strlen($hello)."<br/>"; // this function to get the length of string
echo ucfirst($hello)."<br/>"; // this function to make the first letter in string capital
echo strtoupper($hello)."<br/>"; // this function to make all letters in string capital
echo strtolower($hello)."<br/>"; // this function to make all letters in string lowercase
echo str_replace("hello", "hi", $hello)."<br/>"; // this function to replace word in string with another word
echo str_repeat($hello, 3)."<br/>"; // this function to repeat string a number of times
echo str_shuffle($hello)."<br/>"; // this function to shuffle the letters in string تلغبطهم يعني :D
echo str_word_count($hello)."<br/>"; // this function to count the number of words in string
echo strrev($hello)."<br/>"; // this function to reverse the string
echo "<br/><br/>";


$x = "        Hemdan        ";
echo trim($x)."<br/>"; // this function to remove spaces from the beginning and end of string

$y ="<b>hemdan</b>";
echo strip_tags($y)."<br/>"; // this function to remove html tags from string
echo strlen($y)."<br/>"; // this function to get the length of string with html tags
echo strlen(strip_tags($y))."<br/>"; // this function to get the length of string without html tags
echo htmlspecialchars($y)."<br/>"; // this function to convert html tags to html entities يعني هيظهر التاجات ككلمات مش كود

// there is a lot more you can try it with yourself <3


?>