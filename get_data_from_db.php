<?php
require "connect_php_with_sql.php";
//  $query = "SELECT `id` , `user_name` , `pass` FROM `accounts`"; 
//  you can select what you want like this but if you want to get all fields you can shortcut with *
//  if you want to search in your db use where you can add multiable conditions
    $query = "SELECT * FROM `accounts` WHERE `id`>5 AND `user_name`='hemdan' OR `user_name`= 'mohamed' ";    // it's not case sensitive 
    $result = mysqli_query($connection,$query);
    // echo mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){
        echo $row['id']."   ". $row['user_name']."   ".$row['pass']."<br>";
    }

    mysqli_close($connection);
?>