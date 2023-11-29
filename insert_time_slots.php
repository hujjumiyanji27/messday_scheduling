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

// Define an array of time slots
$timeSlots = [
    '09:00:00',
    '9:30:00',
    '10:00:00',
    '10:30:00',
    '11:00:00',
    '11:30:00',
    '12:00:00',
    '12:30:00',
    '13:00:00',
    '13:30:00',
    '14:00:00',
    '14:30:00',
    '15:00:00',
    '15:30:00',
    '16:00:00',
    '16:30:00',
    '17:00:00'
    // Add more time slots as needed
];

// Insert time slots into the database
foreach ($timeSlots as $slot) {
    $sql = "INSERT INTO time_slots (slot_time, is_booked) VALUES ('$slot', 0)";
    if (mysqli_query($conn, $sql)) {
        echo "Time slot '$slot' inserted successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
