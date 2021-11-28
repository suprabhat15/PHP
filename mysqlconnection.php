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
echo "Connection is successful <br>";


// Create a database
$sql = "CREATE DATABASE kumarDB1";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Database created successfully <br>";
}
else{
    echo "Database Creation Failure : " . mysqli_error($conn);
    echo "<br>";
}

echo "The result is ";
echo var_dump($result);  // when the database is created, it returns true;
echo "<br>";




?>