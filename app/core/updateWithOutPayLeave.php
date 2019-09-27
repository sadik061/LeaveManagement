<?php
include 'database.php';
include 'userProfile.php';

$days = $_POST['without_pay_leave'];
$userid = $_POST['userid'];


$user =  new User($userid);

$user->setLeave('without_pay_leave',$days);
// $conn->query("UPDATE users SET point = '$point' WHERE users.user_id = '$userid'");

// echo "UPDATE users SET point = '$point' WHERE users.user_id = '$userid'";

header("Location: ../showProfile.php?userid=$userid");

?>

