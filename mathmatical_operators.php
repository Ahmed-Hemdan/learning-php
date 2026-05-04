<?php

echo 5 + 10 ."<br/>"; // this operator to add two numbers
echo 5 - 10 ."<br/>"; // this operator to subtract two numbers
echo 5 * 10 ."<br/>"; // this operator to multiply two numbers
echo 5 / 10 ."<br/>"; // this operator to divide two numbers
echo 5 % 10 ."<br/>"; // this operator to find the remainder of a division
echo 5 ** 10 ."<br/>"; // this operator to find the power of a number


// assignment operators
    // = += -= *= /= %= **=


    $x = 5;
    $y = $x;
    $x += 10; // this operator to add a number to a variable and assign the result to that variable
    echo $x ."<br/>"; // 15
    $x -= 5; // this operator to subtract a number from a variable and assign the result to that variable
    echo $x ."<br/>"; // 10
    $x *= 2; // this operator to multiply a variable by a number and assign the result to that variable
    echo $x ."<br/>"; // 20
    $x /= 4; // this operator to divide a variable by a number and assign
    echo $x ."<br/>"; // 5
    $x %= 3; // this operator to find the remainder of a variable divided by
    echo $x ."<br/>"; // 2
    $x **= 3; // this operator to find the power of a variable and
    echo $x ."<br/>"; // 8


    // increment and decrement operators

    $x = 5;
    echo $x++ .$x."<br/>"; // this operator to increment a variable by 1 after returning the old value
    echo $x ."<br/>"; // 6
    $x = 5;
    echo ++$x ."<br/>"; // this operator to increment a variable by 1 and return the new value
    echo $x ."<br/>"; // 6
    $x = 5;
    echo $x-- ."<br/>"; // this operator to decrement a variable by 1 and return the old value
    echo $x ."<br/>"; // 4
    $x = 5;
    echo --$x ."<br/>"; // this operator to decrement a variable by 1 and return the new value
    echo $x ."<br/>"; // 4 


?>
