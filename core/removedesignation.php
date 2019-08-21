<?php
// Start the session
session_start();
include 'database.php';

$sql = "DELETE FROM designation WHERE designation_id=".$_GET["id"];
// echo $sql;
// die();
$conn->query($sql);
$conn->close();
header("Location: ../designation.php");
?>