<?php
$grade = 91;
// if($grade >= 50)echo "You passed the exam <br>";
// else echo "You failed the exam <br>";

// if ($grade >=50){
// echo "You passed the exam <br>";
// echo "congratulations";
// }else {
//     echo "You failed the exam <br>";
//     echo "Better luck next time";
// }



if($grade >= 90)
    echo "You got an A <br>";
elseif($grade >= 80) echo "You got an B";
elseif ($grade >= 70) echo "You got an C";
elseif ($grade >= 60) echo "You got an D";
else echo "You got an F";
?>