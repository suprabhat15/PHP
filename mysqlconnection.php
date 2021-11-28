<?php
// Ways to connect to a MYSQL Database
//  1. mysqli extension
//  2. PDO

// Connecting to a Database
$server = "localhost";
$username = "root";
$password = "";  // removing space from password value will resolve the error.

// Create a connection 
$conn = mysqli_connect($server, $username, $password);
if(!$conn){
    die("Server Connection Error :". mysqli_connect_error());
}
echo "Connection is successful";

?>