
<?php
// Start the employee session.
session_start();

// Check whether the employee has successfully logged in.
// If not, send them back to the login page.
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}

// Get the employee's name from the session.
$employee_name = $_SESSION["employee_name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Intranet | Red Horizon Tours</title>

    <!-- Connect the website stylesheet. -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Employee navigation menu -->
    <header>
        <nav class="navbar">
            <h1>Red Horizon Tours</h1>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="intranet.php">Employee Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main employee dashboard -->
    <main>

        <section class="login-card">

            <h2>Welcome, <?php echo htmlspecialchars($employee_name); ?>!</h2>

            <p>Welcome to the Red Horizon Tours Employee Intranet.</p>

            <h3>Mission Control Overview</h3>

            <p><strong>Next Flight:</strong> RH-204</p>
            <p><strong>Destination:</strong> Mars</p>
            <p><strong>Scheduled Departure:</strong> January 1, 2027</p>
            <p><strong>Tourists Booked:</strong> 128</p>
            <p><strong>Crew Members:</strong> 12</p>
            <p><strong>Mission Status:</strong> Preparing for Departure</p>

            <h3>Employee Resources</h3>

            <ul>
                <li>Employee Handbook</li>
                <li>HR Forms and Documents</li>
                <li>Mission Safety Procedures</li>
                <li>Emergency Contact Information</li>
                <li>Flight and Crew Schedules</li>
            </ul>

            <h3>Important Employee Announcement</h3>

            <p>
                All employees must complete their pre-flight safety training
                before being assigned to a Mars mission.
                Remember, safety comes first, even when traveling millions
                of miles away from Earth!
            </p>

            <p>
                Please review all mission procedures before boarding.
                Jumping off the spaceship during flight is strictly prohibited!
            </p>

            <a href="logout.php">
                <button type="button">Log Out</button>
            </a>

        </section>

    </main>

    <!-- Website footer -->
    <footer>
        <p>&copy; 2026 Red Horizon Tours</p>
    </footer>

</body>
</html>
