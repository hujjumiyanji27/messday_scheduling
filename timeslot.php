<?php
// Assume you've processed the form data from the previous page

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_reason'])) {
    // Process form data here
    
    // Display available time slots
    echo "Select a time slot:<br>";
    // Example time slots (replace this with your logic to fetch available slots from your database or other source)
    echo "<form method='post' action='booking_confirmation.php'>"; // Form to submit the selected time
    echo "<input type='radio' name='time_slot' value='9AM'>9 AM<br>";
    echo "<input type='radio' name='time_slot' value='11AM'>11 AM<br>";
    // ... Display other available slots
    echo "<input type='submit' name='submit_time' value='Book'>";
    echo "</form>";
}
?>
