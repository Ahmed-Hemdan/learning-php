<?php
echo "this is our first script"; 
echo '<br/>';
echo '<b>this is our first script</b> <br/>';

echo 6 ."<br/>"; 

// variables

$name = "hemdan";

echo "Hi ".$name;
echo "<br/>";

// constant 

define(p,3.14,false); // false = case sinsitve , true = no case sinsitve 
echo p."<br/>";


//string 


$var = "hello i am string "; 

//integer 

$numer = 6; 

// float 

$number2 = 6.3;

//boolean 


$status = true ; // can be flase 


// if you want to know the kind of var you can use var_dump 

echo var_dump($var)."<br/>";


//variable variables 


$a= "hello";
$hello = "ahmed"; 
echo $$a;  // $a = hello  => $hello  => ahmed 

?>
<html>
    <head></head>
    <body>
        <script >
            // php code 
        </script>
    </body>
</html>