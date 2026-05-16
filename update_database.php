<?php

require "connect_php_with_sql.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $query = "UPDATE `accounts` SET `user_name`='$name' , `pass`='$pass' WHERE `id` =$id";

    if (mysqli_query($connection, $query)) {
        echo "updated";
    } else {
        echo "Error";
    }
}


?>

<html>

<body>
    <form method="POST">
        <input type="num" name="id"><br>
        <input type="text" name="name"><br>
        <input type="password" name="pass"><br>
        <button>update</button>
    </form>
</body>

</html>