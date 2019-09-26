<?php
// // Start the session
// session_start();
// include 'database.php';
//echo $_GET['user_name']. $_GET['email'].$_GET['password'].$_GET['parent_id'].$_GET['role'];

// $stmt = $conn->prepare("INSERT INTO users (user_name, email, password, designation_id, role) VALUES (?, ?, ?, ?, ?)");
// $stmt->bind_param("sssss", $_GET['user_name'], $_GET['email'],$_GET['password'],$_GET['parent_id'],$_GET['role']);
// $stmt->execute();
// /*if ($stmt->execute()) {
//     echo "worked";
//     die();
// } else {
//     echo "didn't work";
//     die();
// }*/
// $stmt->close();
// $conn->close();
// header("Location: ../user.php");


//--------------saif

// Start the session
include 'database.php';

$sql = "INSERT INTO users (user_name, email, password, designation_id,department_id, role) VALUES ('%s','%s', '%s', '%s', '%s', '%s')";

$query = sprintf($sql,$_GET['user_name'], $_GET['email'],$_GET['password'],$_GET['designation_parent_id'],$_GET['department_parent_id'],$_GET['role']);

$conn->query($query);

header("Location: ../user.php");

?>