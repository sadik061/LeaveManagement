<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$stmt = $conn->prepare("INSERT INTO designation (designation_name,casual_leave,medical_leave,other_leave) VALUES (?, ?, ?, ?)");
$stmt->bind_param($_GET['designation_name'], $_GET['casual_leave'], $_GET['medical_leave'], $_GET['other_leave']);
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: ../designation.php");
?>



