<?php
// Start the session
session_start();
?>
<?php include 'database.php';
$sql = "UPDATE users SET user_name='" . $_GET["user_name"] . "', email='" . $_GET["email"] . "', password='" . $_GET["password"] . "', designation_id=" . $_GET["designation_id"] . " WHERE user_id=" . $_SESSION['userid'];
mysqli_query($conn, $sql);
mysqli_close($conn);
//$stmt = $conn->prepare("INSERT INTO users (user_id, user_name, email, password, designation_id) VALUES (?, ?, ?, ?, ?)");
//$stmt->bind_param("sssss", $_SESSION['id'], $_GET['user_name'], $_GET['email'],$_GET['password'],$_GET['designation_id']);
//$stmt->execute();
//$stmt->close();
//$conn->close();
header("Location: ../index.php");
?>