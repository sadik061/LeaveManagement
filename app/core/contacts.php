<?php


function getContacts(){
    include 'core/database.php';
    include 'session.php';
    
    $userid = $_SESSION["userid"];

    $query = sprintf("SELECT users.*,designation.designation_name FROM users JOIN designation ON users.designation_id=designation.designation_id WHERE user_id != %s",$userid);
    $userlist = array();

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($userlist,array("user_id" => $row["user_id"], "user_name" => $row["user_name"],"phone" => $row["phone"], "email" => $row["email"], "designation_name" => $row["designation_name"], "image" => $row["image"]));
        }
    }

    return $userlist;
}