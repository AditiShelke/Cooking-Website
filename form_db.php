<?php
$servername = "localhost";
$username = "aditishelke";
$password = "1234";
$dbname = "cooking_webpage";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 echo "Connected successfully";
?>
