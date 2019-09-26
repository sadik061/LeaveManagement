<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$sql = "DELETE FROM users WHERE user_id=".$_GET["id"];

$conn->query($sql);
$conn->close();
header("Location: ../user.php");
?>