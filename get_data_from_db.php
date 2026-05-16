<?php
require "connect_php_with_sql.php";
//  $query = "SELECT `id` , `user_name` , `pass` FROM `accounts`"; 
//  you can select what you want like this but if you want to get all fields you can shortcut with *
    $query = "SELECT * FROM `accounts`";
    $result = mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result)){
        echo $row['id']."   ". $row['user_name']."   ".$row['pass']."<br>";
    }

    mysqli_close($connection);
?>