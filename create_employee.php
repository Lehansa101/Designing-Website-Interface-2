<?php
// Connect to the Red Horizon Tours database
require_once "db_connect.php";

// Create the first employee's login information
$userid = "MarsEmployee01";
$employee_name = "Mission Control Employee";
$password = "MarsTour2026!";

// Securely hash the password before saving it
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL statement to add the employee
$sql = "INSERT INTO employees (userid, password_hash, employee_name)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Attach the employee information to the SQL statement
$stmt->bind_param("sss", $userid, $password_hash, $employee_name);

// Execute the statement
if ($stmt->execute()) {
    echo "Employee account successfully created!";
} else {
    echo "Error creating employee: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>