<?php
// Set the timezone to Arizona time for the departure schedule.
date_default_timezone_set("America/Phoenix");

// Get the current date and time.
$now = new DateTime();

// Set the next departure to January 1 at noon this year.
$departure = new DateTime(date("Y") . "-01-01 12:00:00");

// If this year's departure has passed, schedule next year's trip.
if ($departure <= $now) {
    $departure->modify("+1 year");
}

// Convert the departure date to a timestamp in milliseconds
// so JavaScript can use it for the countdown.
$departureTimestamp = $departure->getTimestamp() * 1000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Next Mars Departure | Red Horizon Tours</title>

    <!-- Connects the shared stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navigation menu links back to the other pages -->
    <header>
        <nav class="navbar">
            <h1>Red Horizon Tours</h1>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pilot.php">Pilot Application</a></li>
                <li><a href="departures.php">Mars Departures</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main departure information -->
    <main>
        <section class="departure-card">

            <h2>Countdown to Mars</h2>

            <p class="intro">
                Your journey to the Red Planet is getting closer!
            </p>

            <!-- PHP displays the scheduled departure date -->
            <p>
                Next scheduled departure:
                <strong>
                    <?php echo $departure->format("F j, Y \\a\\t g:i A"); ?>
                    Arizona time
                </strong>
            </p>

            <!-- JavaScript updates this countdown every minute -->
            <div id="countdown" class="countdown">
                Calculating time until departure...
            </div>

            <!-- JavaScript displays a message based on the remaining time -->
            <p id="departure-message" class="message">
                Preparing your journey...
            </p>

        </section>
    </main>

    <!-- Website footer -->
    <footer>
        <p>&copy; 2026 Red Horizon Tours</p>
    </footer>

    <!-- Makes the PHP departure timestamp available to JavaScript -->
    <script>
        const departureTime = <?php echo $departureTimestamp; ?>;
    </script>

    <!-- Loads the JavaScript countdown code -->
    <script src="script.js"></script>

</body>
</html>
