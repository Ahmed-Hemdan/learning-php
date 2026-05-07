<?php
echo "include and require<br>";

include ("super_globals.php"); // if this didn't work he will just continue 
require ("super_globals.php"); // if this didn't work all code after it will not work 

echo "This is a test page ";
?>