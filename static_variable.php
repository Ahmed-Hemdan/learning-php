<?php
    function show_user($name){
   // static means that this varibale will initialize one time then stick in memory 
   // so any time i go for this function again this var will still have his new value 
   // and will not init again
   
    static $id=1; 
    echo "the user who called $name his id is $id <br>";
    $id++;
    }

    show_user("Ahmed");
    show_user("Omar");
    show_user("Sagda");
    show_user("Mohamed");

?>