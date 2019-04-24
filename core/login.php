<?php
// Start the session
session_start();
?>
<?php include 'database.php';

echo $_COOKIE["remember"];
$sql = "SELECT * FROM users where email='".$_POST["email"]."' and password='".$_POST["password"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION["login"] = "true";
        $_SESSION["userid"] = $row["user_id"];
        $_SESSION["role"] = $row["role"];
        setcookie("remember", "true", time() + (86400 * 30), "/");
        setcookie("id", $row["user_id"], time() + (86400 * 30), "/");
        setcookie("role", $row["role"], time() + (86400 * 30), "/");
       header('Location: ../index.php');
    }
} else {
    header('Location: ../login.php?type=alert&message=invalid username or password');
}
$conn->close();
?>