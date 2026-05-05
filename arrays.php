<?php
 // indexed array
$months = array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
 
echo $months[0]."<br>"; 

$months[1] ="Hello";

print_r($months);// this will echo all the array elements 

echo "<br>";

$months[] ="new item"; // this will add element to the end of array 

print_r($months); 

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// associative arrays like map

    $grades =array("arabic"=>10 , "math"=>15 , "English"=>12);

    echo $grades["arabic"]."<br>";
    $grades[]="hello";
    $grades["computer"]=20;
    print_r($grades);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



        // Two-dimensional array like map inside map but it can be indexed or associative like template 

        // here it sould be like columns and rows take 5 as an example 
        // 5 in row 2 it's mean 1 cuz array is zero based and column 2 means 1 again 
        // so 9 in in row 3=2 and column 3=2 
        $numbers= array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9),
        );
        // if i want to echo 7 it will be like this 
            echo $numbers[2][0];
            echo "<br>";
            echo "<br>";
            echo "<br>";
        // if you want to add item you can also do this like this 
        $numbers[0][3] =6;


        $gr=array(
            "Ahmed"=>array("math"=>50,"arabic"=>60,"english"=>55),
            "Mohamed"=>array("math"=>40,"arabic"=>50,"english"=>60),
            "Sagda"=>array("math"=>25,"arabic"=>30,"english"=>50),
        );

            echo $gr["Ahmed"]["arabic"];
            echo "<br>";
            echo "<br>";
            echo "<br>";

                $gr["Omar"]=array("math"=>45,"arabic"=>60,"english"=>30);


                print_r($gr);
                echo "<br>";
                echo "<br>";
                echo "<br>";


                $gr[]="hello";


                print_r($gr);

?>