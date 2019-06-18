<?php
// Start the session
session_start();
?>
<?php include 'database.php';

$timestamp = date("Y-m-d H:i:s");
$notice=$_POST['notice'];
$userid=$_SESSION["userid"];

$stmt = $conn->prepare("INSERT INTO notice_board (notice_board_details, notice_board_notice_given_user, notice_board_creation_time, notice_board_modification_time) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $notice,$userid,$timestamp,$timestamp);

$stmt->execute();
/*if ($stmt->execute()) {

} else {
    echo "didn't work";
    die();
}*/
$stmt->close();
$conn->close();
header("Location: ../index.php");
?>