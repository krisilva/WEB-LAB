<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into the "students" table
$sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>