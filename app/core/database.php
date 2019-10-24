<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "leavemanagement";
    // $username = "bdpalcon_app";
    // $password = "!J@!HPfdY?@p";
    // $dbname = "bdpalcon_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>