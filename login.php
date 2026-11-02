<?php
// Check whether the login form was submitted.
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the User ID and password entered by the user.
    $userid = trim($_POST["userid"] ?? "");
    $password = trim($_POST["password"] ?? "");

    // Check that both fields contain information.
    if ($userid == "" || $password == "") {
        $message = "Please enter both your User ID and password.";
    } else {
        // Credential verification will be added in the next assignment.
        $message = "Your information was entered! Login verification will be available soon.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Red Horizon Tours</title>

    <!-- Connect the website's CSS stylesheet. -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navigation menu -->
    <header>
        <nav class="navbar">
            <h1>Red Horizon Tours</h1>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pilot.php">Pilot Application</a></li>
                <li><a href="departures.php">Mars Departures</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main login section -->
    <main>
        <section class="login-card">

            <h2>Welcome Back, Explorer!</h2>

            <p>Log in to access your Red Horizon Tours account.</p>

            <!-- Display a message after the form is submitted. -->
            <?php if ($message != ""): ?>
                <p class="login-message">
                    <?php echo htmlspecialchars($message); ?>
                </p>
            <?php endif; ?>

            <!-- Login form sends information to this page using POST. -->
            <form action="login.php" method="POST"
                  onsubmit="return validateLogin();">

                <label for="userid">User ID</label>

                <input
                    type="text"
                    id="userid"
                    name="userid"
                    placeholder="Enter your User ID"
                >

                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                >

                <button type="submit">Log In</button>

            </form>

        </section>
    </main>

    <!-- Website footer -->
    <footer>
        <p>&copy; 2026 Red Horizon Tours</p>
    </footer>

    <!-- Load the JavaScript validation code. -->
    <script src="script.js"></script>

</body>
</html>
