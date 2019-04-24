<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$stmt = $conn->prepare("INSERT INTO users (user_name, email, password, designation_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $_GET['user_name'], $_GET['email'],$_GET['password'],$_GET['parent_id']);
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: ../user.php");
?>