<?php
require "connect_php_with_sql.php";
//  $query = "SELECT `id` , `user_name` , `pass` FROM `accounts`"; 
//  you can select what you want like this but if you want to get all fields you can shortcut with *
//  if you want to search in your db use where you can add multiable conditions
// ASC => Ascending 
// DESC => Descending
    $query = "SELECT * FROM `accounts` ORDER BY `id` DESC ";    
    $result = mysqli_query($connection,$query);
    // echo mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){
        echo $row['id']."   ". $row['user_name']."   ".$row['pass']."<br>";
    }

    mysqli_close($connection);
?>
<!-- 
 `id` >1 AND  `id` <=4   => `id` BETWEEN 1 AND 4
  You can negate the condition like this 
 `id` NOT BETWEEN 1 AND 4
 `user_name`='hemdan' OR `user_name`= 'mohamed' => `user_name` IN ('hemdan','mohamed') 
  you can use not too NOT INF
  begin with m leter 

 use like 

 any name begin with m like mohamed mahmoud you can use it 

 WHERE `user_name` LIKE 'm%' 

 but if you want to search for the names that contain m in any order 
 like mohamed hamed adham  
 you can use like too but like this 


 WHERE `user_name` LiKE '%m%'      
 
 _ means char i don't know so if m is the second char in the name and i dont know what is the first one 
    use _ 
    % for numbers of char i dont know

 -->