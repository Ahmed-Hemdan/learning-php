<?php
session_start();
if(empty($_SESSION['user'])){
   
    header("location:session.php?msg= please login first");
}
    echo "hello".$_SESSION['user'] ;

    if($_SERVER['REQUEST_METHOD']=="POST"){
        session_destroy();
        header("location:session.php");
    }
?>

<html>
    <form method="POST">
        <button>logout</button>
    </form>
</html>