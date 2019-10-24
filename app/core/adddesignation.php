<?php
// Start the session
session_start();
include 'database.php';

$designation_name = $_POST['designation_name'];
// $casual_leave = $_POST['casual_leave'];
// $medical_leave = $_POST['medical_leave'];
// $other_leave = $_POST['other_leave'];

$sql = "SELECT '$designation_name' IN (SELECT designation.designation_name FROM designation) AS found";

if ($conn->query($sql)->fetch_object()->found == 1){
    header("Location: ../designation.php?conflicterror=1");
}
else{
    $sql = sprintf("INSERT INTO designation (designation_name,casual_leave,medical_leave,other_leave) VALUES ('%s', %s, %s, %s)",$_POST['designation_name'], $_POST['casual_leave'], $_POST['medical_leave'], $_POST['other_leave']);
    $conn->query($sql);
    header("Location: ../designation.php");

}

// echo $sql;
?>



