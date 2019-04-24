<?php
// Start the session
session_start();
?>

<?php include 'database.php';
$seen= "no";
$status= "pending";
$Year = date('Y-m-d');
$stmt = $conn->prepare("INSERT INTO application (subject, message, status,subday, days, leave_Date, seen) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $_GET['subject'], $_GET['message'],$status,$Year,$_GET['days'],$_GET['date'],$seen);
$stmt->execute();
$last_id = $conn->insert_id;
$stmt = $conn->prepare("INSERT INTO belongs_to (user_id, application_id) VALUES (?, ?)");
$stmt->bind_param("ss", $_SESSION["userid"], $last_id);
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: ../pending.php");
?>