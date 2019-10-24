<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$stmt = $conn->prepare("INSERT INTO designation (designation_name, available_leave) VALUES (?, ?)");
$stmt->bind_param("ss",  $_GET['designation_name'], $_GET['available_leave']);
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: ../designation.php");
?>