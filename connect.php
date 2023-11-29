<?php
$servername = 'localhost';
$username = 'root'; // 'student' if you use VM provided 
$password= 'Miyanji786'; // 'website' if you use VM provided
$dbasename = "agile";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbasename);

// Check connection
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
