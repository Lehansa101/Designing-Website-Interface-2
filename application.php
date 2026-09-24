<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Sets the page title -->
    <title>Red Horizon Tours - Application Received</title>

    <!-- Connects the CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Application Received!</h1>

    <p>
        Thank you for applying to become a pilot for Red Horizon Tours.
    </p>

    <!--
        The information below was sent from the pilot application
        using the POST method.
    -->

    <h2>Application Information</h2>

    <p>
        <strong>Name:</strong>
        <?php echo htmlspecialchars($_POST["name"]); ?>
    </p>

    <p>
        <strong>Age:</strong>
        <?php echo htmlspecialchars($_POST["age"]); ?>
    </p>

    <p>
        <strong>Pilot Experience:</strong>
        <?php echo htmlspecialchars($_POST["experience"]); ?> years
    </p>

    <p>
        <strong>Favorite Mars Location:</strong>
        <?php echo htmlspecialchars($_POST["location"]); ?>
    </p>

    <p>
        <strong>Space Missions Completed:</strong>
        <?php echo htmlspecialchars($_POST["missions"]); ?>
    </p>

    <p>
        <strong>Pilot License:</strong>
        <?php echo htmlspecialchars($_POST["license"]); ?>
    </p>

    <p>
        <strong>Emergency Experience:</strong>
        <?php echo htmlspecialchars($_POST["emergency"]); ?>
    </p>

    <!-- Link back to the home page -->
    <p>
        <a href="index.php">Return to Home</a>
    </p>

</body>
</html>
