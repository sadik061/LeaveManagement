<?php
// Start the session
session_start();
include 'database.php';

$department_name = $_POST['department_name'];
// $casual_leave = $_POST['casual_leave'];
// $medical_leave = $_POST['medical_leave'];
// $other_leave = $_POST['other_leave'];

$sql = "SELECT '$department_name' IN (SELECT department.department_name FROM department) AS found";

if ($conn->query($sql)->fetch_object()->found == 1){
    header("Location: ../department.php?conflicterror=1");
}
else{
    $sql = sprintf("INSERT INTO department (department_name) VALUES ('%s')",$_POST['department_name']);
    $conn->query($sql);
    header("Location: ../department.php");

}

// echo $sql;
?>



