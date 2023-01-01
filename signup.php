<?php

// Connect to the MySQL database
$host = "localhost";
$username = "database_username";
$password = "database_password";
$dbname = "signup_form";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get data from HTML form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into MySQL database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
