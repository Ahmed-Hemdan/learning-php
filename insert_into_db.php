<?php
require "connect_php_with_sql.php";


if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name = $_POST['user_name'];
    $pass= md5($_POST['password']);
}
 
$query = "INSERT INTO `accounts` (`user_name`,`pass`) VALUES ('$user_name','$pass')";

if(mysqli_query($connection ,$query)) echo "Data added ".mysqli_insert_id($connection);
else echo "Error: ";


?>

<html>
    <body>
            <form  method="post">
                <input type="text" name="user_name"> <br>
                <input type="password" name="password"><br>
                <button>add</button>
            </form>
    </body>
</html>