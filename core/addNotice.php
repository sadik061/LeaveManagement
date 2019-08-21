<?php
// Start the session
session_start();
?>
<?php include 'database.php';

$timestamp = date("Y-m-d H:i:s");
$notice=$_POST['notice'];
$notice_subject = $_POST['notice_subject'];
$userid=$_SESSION["userid"];

$sql = sprintf("INSERT INTO notice_board (subject,notice_board_details, notice_board_notice_given_user, notice_board_creation_time, notice_board_modification_time) VALUES (%s, %s, %s, '%s', '%s')",$notice_subject,$notice,$userid,$timestamp,$timestamp);
$conn->query($sql);
// $stmt->bind_param();

// $stmt->execute();
/*if ($stmt->execute()) {

} else {
    echo "didn't work";
    die();
}*/
// $stmt->close();
// $conn->close();
header("Location: ../index.php");
?>