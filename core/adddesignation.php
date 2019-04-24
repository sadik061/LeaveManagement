<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$stmt = $conn->prepare("INSERT INTO designation (designation_name, parent_id) VALUES (?, ?)");
$stmt->bind_param("ss",  $_GET['designation_name'], $_GET['parent_id']);
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: ../designation.php");
?>