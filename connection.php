<?php

error_reporting(0);

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "employee";

$connection = mysqli_connect($server_name, $username, $password, $db_name);

if($connection){
    echo "Connection established successfully to the database";
} else{
    echo "Failed to connect to the database ".mysqli_connect_error();
}
?>