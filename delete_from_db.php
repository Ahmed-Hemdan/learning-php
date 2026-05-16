<?php

require "connect_php_with_sql.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $query = "DELETE FROM `accounts` WHERE `id`=$id";
    if (mysqli_query($connection, $query)) {
        echo "Deleted";
        echo mysqli_query($connection, $query);
    } else {
        echo "Couldn't find it ";
    }
}

?>



<html>

<body>
    <form method="post">
        <input type="number" name="id">
        <button>delete</button>
    </form>
</body>

</html>