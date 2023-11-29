<?php
// Assuming $currentDay, $date, and $calendar are retrieved or generated earlier in your code

// Sample values for demonstration
$currentDay = date("d"); // Get the current day
$date = date("Y-m-d"); // Get the current date in a format like YYYY-MM-DD
$calendar = ''; // Initialize the calendar variable

// Here's your code for generating the calendar and the book button
// $calendar .= "<td class='today'><h4>$currentDay</h4>...";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_reason'])) {
    // Retrieve the subject and the reason for booking
    $selected_subject = $_POST['subject'];
    $booking_reason = $_POST['booking_reason'];

    // Here you can process the booking reason and subject, such as saving them to a database

    // For demonstration, you can echo the selected subject and reason
    echo "You booked $selected_subject for: " . $booking_reason;
} else {
    // Display the form
    echo "<form method='post' action='timeslot.php'>
        <input type='hidden' name='date' value='$date'> <!-- Hidden field to store the date -->
        <label for='subject'>Select Subject:</label><br>
        <select name='subject' id='subject'>
            <option value='Maths'>Maths</option>
            <option value='Science'>Science</option>
            <option value='English'>English</option>
            <option value='Computer'>Computer</option>
        </select><br>
        <label for='booking_reason'>Reason for Booking:</label><br>
        <textarea name='booking_reason' id='booking_reason' rows='4' cols='50'></textarea><br>
        <input type='submit' name='submit_reason' value='Submit'>
    </form>";
}
?>
