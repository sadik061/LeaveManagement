<?php

function getMessage($msg_id){
    include 'core/database.php';
    $query = "SELECT messages.*,users.user_name as from_username FROM messages JOIN users ON users.user_id=messages.from_user_id WHERE messages.msg_id='$msg_id'" ;
    
    $result = $conn->query($query);
    $msgdata = array();
    
    while($row = $result->fetch_assoc()){
        $msgdata['from_username'] = $row['from_username'];
        $msgdata['datetime'] = date('h:i A -- d/m/Y', strtotime($row["datetime"]));
        $msgdata['msg'] = $row['msg'];
    }

    return $msgdata;
}

function deleteMessage($msg_id){
    include 'core/database.php';
    $conn->query("DELETE FROM messages WHERE messages.msg_id = '$msg_id'");
    header("Location: msg.php");
}

function sendMessage($to_userid,$msg){
    include 'core/database.php';

    $date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
    $timestamp = $date->format('Y-m-d H:i:s');

    $from_userid = $_SESSION['userid'];
    $conn->query("INSERT INTO messages (from_user_id, to_user_id, msg, seen, datetime) 
    VALUES ('$from_userid', '$to_userid', '$msg', '0', '$timestamp')");
    
}

function seenMessage($msg_id){
    include 'core/database.php';
    $conn->query("UPDATE messages SET seen = '1' WHERE messages.msg_id = '$msg_id'");
}

