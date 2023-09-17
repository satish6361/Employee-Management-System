<?php
// Turn off error reporting to suppress PHP errors
error_reporting(0);

// Database connection parameters
$server_name = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password (leave empty for no password)
$db_name = "employee"; // database name

// Establish a MySQL database connection
$connection = mysqli_connect($server_name, $username, $password, $db_name);

// Check if the connection was successful
if($connection){
    // Connection successful, no action required here
} else{
    // Connection failed, display an error message
    echo "Failed to connect to the database " . mysqli_connect_error();
}
?>