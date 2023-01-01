<?php

// Connect to the MySQL database
$host = "localhost";
$dbname = "form_db";
$conn = mysqli_connect($host, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error($host, $form_db));
}

// Get data from HTML form
$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$member = $_POST['member'];

// Insert data into MySQL database
$sql = "INSERT INTO users ( name, email, location, member) VALUES ('$id','$name', '$email', '$location', '$member')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
$sql = "SELECT * FROM `users`;";

?>
