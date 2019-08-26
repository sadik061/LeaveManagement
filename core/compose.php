<?php
// Start the session
session_start();

include 'database.php';
include 'userProfile.php'; 
// require 'databaseClass.php';

$user = new User($_SESSION["userid"]);

$leaveType = $_POST['leave_type'];
$days_needed = $_POST['days'];
$subject = $_POST['leave_type'];
$msg = $_POST['message'];
$status = "pending";
$days = $_POST['days'];
$leaveDate = $_POST['date'];
$seen = 'no';


$designation_leave = $conn->query("SELECT '$leaveType' as days FROM users WHERE user_id='$user->userid'")->fetch_object()->days;

$leaveLeft = $user->getLeave($leaveType);


if($days < 1){
    // user fun error
    header("Location: ../compose.php?error=daysError");
    exit(1);
}

if(in_array($leaveType, ['earn_leave','casual_leave','medical_leave','other_leave'])){
    // This leaves need to be checked

    if($days_needed > $leaveLeft){
        // error
        header("Location: ../compose.php?error=remainingError");
        exit(1);
    }
}

$query = sprintf("INSERT INTO application (user_id, subject, message, status,subday, days, leave_Date, seen, department, admin) 
                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",$user->userid,$subject,$msg,$status,date("Y-m-d"),$days,$leaveDate,$seen,0,0);

$conn->query($query);
// echo $query;
header("Location: ../pending.php");



// $seen= "no";
// $status= "pending";
// $Year = date('Y-m-d');
// $from = date('y-m-');
// $previous = 0;
// $sql2 = "SELECT sum(days) as sum FROM application WHERE STATUS='approved' AND leave_date>='".$from."01' and leave_date<='".$Year."'";
// $result2 = $conn->query($sql2);
// if (isset($result2->num_rows)) {
//     $row2 = $result2->fetch_assoc();
//     $previous = $row2["sum"];
// }

// $sql = "SELECT * FROM `users` NATURAL JOIN designation WHERE user_id='$user->userid'";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();

// if($previous+$_GET['days']<$row["available_leave"]) {

//     $stmt = $conn->prepare("INSERT INTO application (user_id, subject, message, status,subday, days, leave_Date, seen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param($user->userid,$_GET['subject'], $_GET['message'], $status, $Year, $_GET['days'], $_GET['date'], $seen);
//     $stmt->execute();
// /*    if ($stmt->execute()) {
//     echo "worked";
//     die();
// } else {
//     echo "didn't work";
//     die();
// }*/
//     $stmt->close();
//     $conn->close();
//     header("Location: ../pending.php");
// }
// else{
//     echo "not done";
//     header("Location: ../pending.php?message='you can't apply'");
// }

?>