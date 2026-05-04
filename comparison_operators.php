<?php 
// Comparison Operators 
// == === != !== > < >= <= <=> 
 echo "Comparison Operators <br>";
$x=10;
$y=20;
echo $x==$y; // false will not appear because it is false
echo "<br>";
echo $x!=$y; // true will appear because it is true with value 1 
echo "<br>";
echo $x<$y; // true
echo "<br>";
echo $x>$y; // false
echo "<br>";
echo $x<=$y; // true
echo "<br>";
echo $x>=$y; // false
echo "<br>";
echo $x<>$y; //this is like != // true
echo "<br>";

    
    // if you want to compare the value and the type of the variable you can use === and !==
    $a=10; // integer
    $b=10.0; // float
    echo $a==$b; // true because it only compares the value
    echo "<br>";
    echo $a=== $b; // false because it compares both the value and the type
    echo "<br>";
    echo $a!== $b; // true because it compares both the value and the type
    echo "<br>";

    echo var_dump($a).var_dump($b); // to show the type of the variable


            // logical operators

            // && (and) || (or) ! (not) xor (exclusive or)

            echo "Logical Operators <br>";

            $age = 25;

            echo $age > 20 && $age < 30 ."<br>";  // true because both conditions are true
            echo ($age > 20 and $age < 30)."<br>";
            
            // same with or operator
            echo $age < 20 || $age < 30 ."<br>"; // false because both conditions are false
            echo ($age < 20 or $age < 30)."<br>";

            echo $age > 20 xor $age > 30 ."<br>"; // true
            echo ($age > 20 xor $age < 30)."<br>"; // false

?>