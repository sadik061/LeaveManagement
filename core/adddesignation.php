<?php
// Start the session
session_start();
include 'database.php';
$sql = sprintf("INSERT INTO designation (designation_name,casual_leave,medical_leave,other_leave) VALUES ('%s', %s, %s, %s)",$_POST['designation_name'], $_POST['casual_leave'], $_POST['medical_leave'], $_POST['other_leave']);
$conn->query($sql);
header("Location: ../designation.php");
// echo $sql;
?>



