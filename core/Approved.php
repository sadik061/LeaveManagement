<?php
// Start the session
session_start();

include 'database.php';
include 'userProfile.php';

$status = $_GET["status"];
$application_id = $_GET["application_id"];

$leave_type = $conn->query("SELECT subject as type, days FROM application WHERE application_id='$application_id'")->fetch_object()->type;
$leave_days = $conn->query("SELECT days FROM application WHERE application_id='$application_id'")->fetch_object()->days;
$applicant_user = $conn->query("SELECT user_id FROM application WHERE application_id='$application_id'")->fetch_object()->user_id;

$user = new User($applicant_user);

if ($_SESSION["role"] == "department_head") {
    $sql = "UPDATE application set department=1 , status='$status' WHERE application_id='$application_id'";
} else if ($_SESSION["role"] == "super_admin") {
    $user->setLeave($leave_type,$leave_days);

    $sql = "UPDATE application set admin=1 , status='$status' WHERE application_id='$application_id'";
} else {
    $sql = "UPDATE application set status='$status' WHERE application_id='$application_id'";
}

mysqli_query($conn, $sql);
mysqli_close($conn);
//$stmt = $conn->prepare("INSERT INTO users (user_id, user_name, email, password, designation_id) VALUES (?, ?, ?, ?, ?)");
//$stmt->bind_param("sssss", $_SESSION['id'], $_GET['user_name'], $_GET['email'],$_GET['password'],$_GET['designation_id']);
//$stmt->execute();
//$stmt->close();
//$conn->close();
header("Location: ../pending.php");
