<?php
include 'database.php';

$point = $_POST['point'];
$userid = $_POST['userid'];


$conn->query("UPDATE users SET point = '$point' WHERE users.user_id = '$userid'");

// echo "UPDATE users SET point = '$point' WHERE users.user_id = '$userid'";

header("Location: ../showProfile.php?userid=$userid");

?>

