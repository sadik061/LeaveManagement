<?php
// Start the session
session_start();
include 'database.php';

$department_id = $_POST["department_id"];
$department_name = $_POST["department_name"];




$sql = sprintf("UPDATE department SET department_name='%s' WHERE department_id=%s",$department_name,$department_id);

$conn->query($sql);
$conn->close();
header("Location: ../department.php");
// if ($casual_leave < 0 || $medical_leave < 0 ||$other_leave < 0 ){
//     header("Location: ../department.php?updaterror=1");

// }
// else
// {
//     // echo $sql;

// }

?>