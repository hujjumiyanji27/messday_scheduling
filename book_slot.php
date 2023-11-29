<?php
// Connect to your MySQL database (modify the connection details)

$db_host = "localhost";
$db_user = "hmmiyanji";
$db_password = "Miyanji@786";
$db_name = "agile";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data here, assuming you retrieved the selected subject and booking reason
$selected_subject = $_POST['subject'];
$booking_reason = $_POST['booking_reason'];

// Redirect to the booking confirmation page
header("Location: booking_confirmation.php?subject=$selected_subject&reason=$booking_reason");
exit();

// Get the selected time slot from the form submission
if (isset($_POST['slot_time'])) {
    $selectedTime = $_POST['slot_time'];

    // Update the time slot status to "Booked" in the database
    $sql = "UPDATE time_slots SET is_booked = 1 WHERE slot_time = '$selectedTime'";
    if (mysqli_query($conn, $sql)) {
        echo "Time slot '$selectedTime' has been booked successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);


?>

<!-- You can also add a link back to the main page or a confirmation message here. -->
