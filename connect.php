<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = " ";
$dbname = "redo";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
else {
    //echo"succesfully connected";
}

?>