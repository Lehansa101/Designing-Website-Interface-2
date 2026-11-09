<?php
// Start the current employee session.
session_start();

// Remove all session information.
$_SESSION = array();

// Destroy the session.
session_destroy();

// Return the employee to the login page.
header("Location: login.php");
exit();
?>