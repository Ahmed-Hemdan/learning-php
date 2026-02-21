<?php
 echo "Hello from my first script <br/>";
 echo '<b>i am trying single quote right now </b> <br/>' ;
 // this is a single comment    
    /*
        kldsjflsdj
        dlfkjsdlfdjs
        dlkfsdjflsdj
    */


        // variables
        $name = 'Ahmed';
        echo "hi " .$name ."<br/>";
        define(p,3.14, false);
        echo p."<br>";


        // variables data type 

        $father ="Hemdan";
        $x= 3;
        $y = 4.5;
        $status = true;

        echo var_dump($father)."<br>";
        echo var_dump($x)."<br>";
        echo var_dump($y)."<br>";
        echo var_dump($status)."<br>";


        // variable variables 

        $a = "hello";
        $hello = "welcome"  ;
        echo $$a    ; // $a = hello   => $hello => welcome 

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
</body>
</html>