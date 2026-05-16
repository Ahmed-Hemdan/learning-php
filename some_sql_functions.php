<?php

require "connect_php_with_sql.php";



$query = "SELECT COUNT(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
$data = mysqli_fetch_array($result);
echo "Count = " .$data['c']."<br>";

$query = "SELECT MAX(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
$data = mysqli_fetch_array($result);
echo "Max = " .$data['c']."<br>";

$query = "SELECT AVG(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
$data = mysqli_fetch_array($result);
echo "Avg = " .$data['c']."<br>";

$query = "SELECT MIN(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
$data = mysqli_fetch_array($result);
echo "Min = " .$data['c']."<br>";

$query = "SELECT SUM(`id`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
$data = mysqli_fetch_array($result);
echo "Sum = " .$data['c']."<br>";

// UCASE this will makes all user name upercase (capital)
$query = "SELECT UCASE(`user_name`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
while($data=mysqli_fetch_array($result)){
echo "name = " .$data['c']."<br>";
}
// LCASE this will makes all user name lowercase (small)
$query = "SELECT UCASE(`user_name`) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
while($data=mysqli_fetch_array($result)){
echo "name = " .$data['c']."<br>";
}
// MID is to get part of the data 1,4 mean the first 4 char
$query = "SELECT MID(`user_name`,1,4) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
while($data=mysqli_fetch_array($result)){
echo "Count = " .$data['c']."<br>";
}

// ROUND to get the nearst integer number of the reslut ,1 => means to keep just one digit after the float 
$query = "SELECT ROUND(`id`,1) AS c FROM `accounts`";
$result = mysqli_query($connection,$query);
while($data=mysqli_fetch_array($result)){
echo "Count = " .$data['c']."<br>";
}





mysqli_close();
?>