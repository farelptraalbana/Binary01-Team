<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "user_db";

$conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));

?>