<?php
        // database connection
        // mysqli_connect(); 4 parameters => host , user , pass, dbname return=> connection status
        // you wil proplly have error with connection cuz of auth method 
        // use this method to bypass with the native password you wrote before
        // ALTER USER 'Hemdan'@'%' IDENTIFIED WITH mysql_native_password BY 'Ahmed964#';
        // FLUSH PRIVILEGES;
        // NOTE you will need to open your sql bin path first in your cmd to use this commands
        $host= "localhost";
        $user_name="Hemdan" ;
        $pass="Ahmed964#" ;
        $db_name="users";
        $connection = mysqli_connect($host, $user_name,$pass,$db_name);
        if($connection){
            echo "Connected";
        }else{
            die("error: ". mysqli_connect_error()); // this will break the code here if there is error 
        }
?>