<?php

// Connecting to a Database
$server = "localhost";
$username = "root";
$password = "";  // removing space from password value will resolve the error.
$database = "kumarDB";


// Create a connection 
$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("Server Connection Error :". mysqli_connect_error());
}
echo "Connection is successful <br>";


// Create a table in database named kumarDB
$sql = "CREATE TABLE `kumarDB`.`project` 
    ( 
        `Serial` INT NOT NULL AUTO_INCREMENT , 
        `Name` TEXT NOT NULL , 
        `Description` TEXT NOT NULL , 
        `Deadline` DATE NOT NULL , PRIMARY KEY (`Serial`)
    ) ";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Table in database kumarDB created successfully <br>";
}
else{
    echo "Table in database kumarDB Creation Failure : " . mysqli_error($conn);
    echo "<br>";
}
?>