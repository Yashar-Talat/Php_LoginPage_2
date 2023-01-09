<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "my_site";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection lost!";
}