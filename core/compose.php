<?php
// Start the session
session_start();
?>

<?php include 'database.php';
$seen= "no";
$status= "pending";
$Year = date('Y-m-d');
$from = date('y-m-');
$sql2 = "SELECT sum(days) as sum FROM `belongs_to` NATURAL JOIN application WHERE STATUS='approved' AND leave_date>='".$from."01' and leave_date<='".$Year."'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

$sql = "SELECT * FROM `users` NATURAL JOIN designation WHERE user_id=".$_SESSION["userid"];
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($row2["sum"]+$_GET['days']<$row["available_leave"]) {
    $stmt = $conn->prepare("INSERT INTO application (subject, message, status,subday, days, leave_Date, seen) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $_GET['subject'], $_GET['message'], $status, $Year, $_GET['days'], $_GET['date'], $seen);
    $stmt->execute();
    $last_id = $conn->insert_id;
    $stmt = $conn->prepare("INSERT INTO belongs_to (user_id, application_id) VALUES (?, ?)");
    $stmt->bind_param("ss", $_SESSION["userid"], $last_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: ../pending.php");
}
else{
    header("Location: ../pending.php?message='you can't apply'");
}

?>