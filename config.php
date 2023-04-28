<?php
$server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "key_checker";

$server = mysqli_connect($server,$db_user,$db_password,$db_name);
if (!$server) {
die("Could not connect to server, Here's why: ").mysqli_connect_error();
}
?>