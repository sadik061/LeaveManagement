<?php
    $servername = "localhost";
$username = "root";
$password = "151151";
$dbname = "LeaveManagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>