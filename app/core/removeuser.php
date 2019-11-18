<?php
// Start the session
session_start();
?>
<?php include 'database.php';

$sql0 = "DELETE FROM application WHERE user_id = '%s'";
$sql1 = "DELETE FROM jobs WHERE user_id = '%s'";
$sql2 = "DELETE FROM files WHERE user_id = '%s'";
$sql3 = "DELETE FROM notice_board WHERE notice_board_notice_given_user = '%s'";
$sql4 = "DELETE FROM messages WHERE from_user_id = '%s' or to_user_id = '%s'";
$sql = "DELETE FROM users WHERE user_id='%s'";


$sql = sprintf($sql,$_GET["id"]);
$sql0 = sprintf($sql0,$_GET["id"]);
$sql1 = sprintf($sql1,$_GET["id"]);
$sql2 = sprintf($sql2,$_GET["id"]);
$sql3 = sprintf($sql3,$_GET["id"]);
$sql4 = sprintf($sql4,$_GET["id"],$_GET["id"]);

// echo $sql;

$conn->query($sql0);
$conn->query($sql1);
$conn->query($sql2);
$conn->query($sql3);
$conn->query($sql4);
$conn->query($sql);
$conn->close();
header("Location: ../user.php");
?>