<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_time'])) {
    // Process and confirm time slot selection
    $selected_time = $_POST['time_slot'];

    // Insert into database (replace this with your database insertion code)
    // Assuming you have a database connection
    $conn = new mysqli("localhost", "hmmiyanji", "Miyanji@786", "booking_system");



    // Retrieve the values from URL parameters
$selected_subject = $_GET['subject'];
$booking_reason = $_GET['reason'];

// Display for testing purposes
echo "Selected Subject: $selected_subject<br>";
echo "Booking Reason: $booking_reason<br>";

// Now proceed with your database insertion using these variables
// Ensure they are sanitized before using in the SQL query (to prevent SQL injection)

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Assuming a table named 'bookings' with columns 'subject', 'reason', and 'time_slot'
    $sql = "INSERT INTO bookings (subject, reason, time_slot) VALUES ('$selected_subject', '$booking_reason', '$selected_time')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking confirmed and inserted into the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
