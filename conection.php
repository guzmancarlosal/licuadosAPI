<?php
$servername = "areliablewindowcleaning.com";
$username = "areliabl";
$password = "uGgo7gOq55ggA";
$dbname = "areliabl_licuado";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>