<?php
    echo "welcome to loops in php <br>";

    // while 
    // do 
    // for 
    $counter =1;
    while($counter<=10){
    echo $counter.'<br>';
    $counter++;
    }

    echo "finished with while loop<br> ";
    // do while 
    do {
        echo " i am do while loop<br>";
    }while($counter>11);



    // for loop


    for($i=0; $i<10; $i++){
            echo "Hi from for loop i am $i <br>";
    }


    for($id=1;$id<=10;$id++){
        if($id==4) continue;
        echo $id."<br>";
    }
?>