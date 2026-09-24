<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Sets the page title -->
    <title>Red Horizon Tours - Pilot Application</title>

    <!-- Connects the CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Page heading -->
    <h1>Become a Mars Pilot</h1>

    <p>
        Think you have what it takes to safely guide tourists across Mars?
        Complete the application below.
    </p>

    <!--
        The form uses POST to send the information to application.php.
        JavaScript validation will check the information before submission.
    -->
    <form action="application.php" method="POST" onsubmit="return validateForm()">

        <!-- Applicant's name -->
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name">

        <!-- Applicant's age -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">

        <!-- Years of pilot experience -->
        <label for="experience">Years of Pilot Experience:</label>
        <input type="number" id="experience" name="experience">

        <!-- Favorite Mars location -->
        <label for="location">Which Mars location would you most like to explore?</label>
        <input type="text" id="location" name="location">

        <!-- Number of missions -->
        <label for="missions">How many space missions have you completed?</label>
        <input type="number" id="missions" name="missions">

        <!-- Pilot license question -->
        <label for="license">Do you currently have a pilot license?</label>
        <select id="license" name="license">
            <option value="">Choose one</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <!-- Emergency experience -->
        <label for="emergency">Describe any emergency experience you have:</label>
        <textarea id="emergency" name="emergency" rows="4"></textarea>

        <!-- Submit button -->
        <button type="submit">Submit Application</button>

    </form>

    <!-- Link back to the home page -->
    <p>
        <a href="index.php">Back to Home</a>
    </p>

    <!-- Connects the JavaScript file -->
    <script src="script.js"></script>

</body>
</html>