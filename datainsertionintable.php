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


// Added data in table named "project" in database named kumarDB
$sql = "INSERT INTO `project` (`Serial`, `Name`, `Description`, `Deadline`) VALUES (NULL, 'Suprabhat', 'Template', '2021-12-15')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "data in table project inserted successfully <br>";
}
else{
    echo "Insertion of data in table caused error : " . mysqli_error($conn);
    echo "<br>";
}
?>