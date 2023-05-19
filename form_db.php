<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $location = $_POST['location'];
    $member = $_POST['member'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cooking_webpage";
    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the data into the table
    $sql = "INSERT INTO register (name, email, location, member) VALUES ('$name', '$email', '$location', '$member')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 echo "Connected successfully";
?>
