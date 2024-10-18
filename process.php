<?php
require 'connection.php';

// Get the data from the form
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO register (name, username, phone, email, password)
VALUES ('$name', '$username', '$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>