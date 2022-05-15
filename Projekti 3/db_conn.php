<?php

$sname= "127.0.0.1:4306";
$unmae= "root";
$password = "1242326594Fa.";

$db_name = "users1";


$conn = mysqli_connect($sname, $unmae, $password,$db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>