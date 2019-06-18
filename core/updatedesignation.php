<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$des_id=$_GET["des_id"];
$des_name = $_GET["designation_name"];
$des_leave=$_GET["available_leave"];
$sql = "UPDATE designation SET designation_name='$des_name', available_leave='$des_leave' WHERE designation_id=".$des_id;

$conn->query($sql);
$conn->close();
header("Location: ../designation.php");
?>