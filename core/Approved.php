<?php
// Start the session
session_start();
?>
<?php include 'database.php';
if ($_SESSION["role"] == "department_head") {
    $sql = "UPDATE application set department=1 , status='" . $_GET["status"] . "' WHERE application_id=" . $_GET["application_id"];
} else if ($_SESSION["role"] == "super_admin") {
    $sql = "UPDATE application set admin=1 , status='" . $_GET["status"] . "' WHERE application_id=" . $_GET["application_id"];
} else {
    $sql = "UPDATE application set status='" . $_GET["status"] . "' WHERE application_id=" . $_GET["application_id"];
}

mysqli_query($conn, $sql);
mysqli_close($conn);
//$stmt = $conn->prepare("INSERT INTO users (user_id, user_name, email, password, designation_id) VALUES (?, ?, ?, ?, ?)");
//$stmt->bind_param("sssss", $_SESSION['id'], $_GET['user_name'], $_GET['email'],$_GET['password'],$_GET['designation_id']);
//$stmt->execute();
//$stmt->close();
//$conn->close();
header("Location: ../pending.php");
?>