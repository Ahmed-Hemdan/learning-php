<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user= $_POST["user"];
    $pass= $_POST["pass"];
    if($user=="Ahmed"&& $pass == "Hemdan"){
        $_SESSION["user"]= $user;
        header("location:hello.php");
    }else{
        header("location:session.php?err= invalid data");
    }
}

?>

<html>
    <head></head>
    <body>
        <?php echo $_GET[msg]."<br>"?>
        <form  method="post">
            <label>username</label><br>
            <input type="text" placeholder="enter your username" name="user"><br>
            <label>password</label><br>
            <input type="password" placeholder="enter your password" name="pass"><br>   
            <?php
                echo $_GET[err]."<br>";
            ?>
            <button>Login</button>

        </form>
    </body>
</html>