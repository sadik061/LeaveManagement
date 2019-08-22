<?php

function getNotice($from){
    
    require('database.php');
    
    $query = sprintf("SELECT notice_board.*,users.user_name FROM notice_board JOIN users ON users.user_id=notice_board.notice_board_notice_given_user ORDER BY notice_board.notice_board_creation_time LIMIT %s,10",$from);
    $noticeArray = array();
    
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $time = date('h:i A -- d/m/Y', strtotime($row["notice_board_creation_time"]));
            array_push($noticeArray,array("id" => $row["notice_board_id"],"subject" => $row["subject"],"user_name" => $row["user_name"], "notice" => $row["notice_board_details"],"time" => $time ));
        }
    }
    
    return $noticeArray;
}

function getAllNoticeSize(){
    require('database.php');
    $sql = "SELECT COUNT(*) as count_msg FROM notice_board";
    return $conn->query($sql)->fetch_object()->count_msg;
}

?>