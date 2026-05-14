<?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if($user=="Ahmed" && $pass =="Hemdan"){
                header("location:arrays.php");
            }else{
                header("location:header_function.php?err=invalid data");
            }
        }
?>

<!DOCTYPE html>

<html>
    <head></head>
    <body>
        
    <h2>Login Form </h2>    
    <form method="post">
        <div class=container>
            <label >username</label><br>
            <input type="text" placeholder="Enter your username" name="user" require><br>
            <label >password</label><br>
            <input type="password" name="pass" placeholder="Enter your password" require>
            <?php echo $_GET[err];?>
            <button>Login</button>
        </div>
    </form>
    </body>
</html>