<?php
$servername = "localhost";
$username = "root";  // Your DB username
$password = "";              // Your DB password
$database = "event_management"; // Your DB name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
