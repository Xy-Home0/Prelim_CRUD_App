<?php
$servername = "localhost";
$username = "root"; // adjust if needed
$password = "";     // adjust if needed
$dbname = "task_manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>