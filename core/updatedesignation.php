<?php
// Start the session
session_start();
include 'database.php';

$designation_id = $_POST["designation_id"];
$designation_name = $_POST["designation_name"];
$casual_leave = $_POST["casual_leave"];
$medical_leave = $_POST["medical_leave"];
$other_leave = $_POST["other_leave"];



$sql = sprintf("UPDATE designation SET designation_name='%s',casual_leave=%s,medical_leave=%s,other_leave=%s WHERE designation_id=%s",$designation_name,$casual_leave,$medical_leave,$other_leave,$designation_id);

if ($casual_leave < 0 || $medical_leave < 0 ||$other_leave < 0 ){
    header("Location: ../designation.php?updaterror=1");

}
else
{
    // echo $sql;
    $conn->query($sql);
    $conn->close();
    header("Location: ../designation.php");

}

?>