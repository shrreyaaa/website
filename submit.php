<?php
// Database connection parameters
$hostname = "localhost";  // Use your database hostname
$username = "root";       // Use your database username
$password = "root";           // Use your database password
$dbname = "cured_hospital"; // Use your database name

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$department = $_POST['department'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO appointments (department, name, email, phone, date, message)
        VALUES ('$department', '$name', '$email', '$phone', '$date', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
