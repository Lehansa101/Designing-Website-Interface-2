<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = ""; // Default XAMPP root password is usually empty
$database = "red_horizon";

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check whether the connection was successful
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Set the character encoding
$conn->set_charset("utf8mb4");
?>