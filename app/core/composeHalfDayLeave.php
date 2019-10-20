<?php
// Start the session
session_start();

include 'database.php';
include 'userProfile.php'; 
// require 'databaseClass.php';

$user = new User($_SESSION["userid"]);

$hours = $_GET['hours'];
$subject = 'halfday_leave';
$leaveType = 'halfday_leave';
$msg = $_GET['message'];
$status = "pending";
$leaveDate = $_GET['date'];
$seen = 'no';


$designation_leave = $conn->query("SELECT '$leaveType' as days FROM users WHERE user_id='$user->userid'")->fetch_object()->days;

$leaveLeft = $user->getLeave($leaveType);

if($leaveLeft == 2){
    // no half day leave left
    header("Location: ../compose.php?error=maxHalfdayError");
    exit(1);
}

$query = sprintf("INSERT INTO application (user_id, subject, message, status,subday, hours,days, leave_Date, seen, department, admin) 
                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s',1, '%s','%s', '%s', '%s')",$user->userid,$subject,$msg,$status,date("Y-m-d"),$hours,$leaveDate,$seen,1,0);

$conn->query($query);
// echo $query;
header("Location: ../pending.php");
