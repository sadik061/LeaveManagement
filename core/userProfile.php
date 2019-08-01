<?php

// session_start();
require 'databaseClass.php';

class User
{   
    public function __construct($userid){
        $this->userid = $userid;

        $connection = new Connection();
        $conn = $connection->getConnection();

        $query = sprintf("SELECT * FROM users WHERE user_id=%s",$this->userid);
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()){
            $this->user_name = $row['user_name'];
            $this->email = $row['email'];
            $this->password = $row['password'];
            $this->designation_id = $row['designation_id'];
            $this->role = $row['role'];
            $this->image = $row['image'];
            $this->facebook = $row['facebook'];
            $this->linkedin = $row['linkedin'];
            $this->skype = $row['skype'];
            $this->earn_leave = $row['earn_leave'];
            $this->earn_leave_year = $row['earn_leave_year'];
        }
    }

    public function getLeave($leaveType){
        $connection = new Connection();
        $conn = $connection->getConnection();

        if(in_array($leaveType, ['earn_leave','maternity_leave','urgent_leave'])){
            // if leave_type is in ['earn_leave','maternity_leave','urgent_leave']
            $query = sprintf("SELECT %s as days FROM users WHERE users.user_id=%s",$leaveType,$this->userid);
        }
        else{
            // if leave_type is in [other_leave, medical_leave, casual_leave]
            $query = sprintf("SELECT %s as days FROM designation WHERE designation_id=%s",$leaveType,$this->designation_id);
        }

        $leave = $conn->query($query)->fetch_object()->days;


        return $leave;
    }


    public function getDesignation(){
        $connection = new Connection();
        $conn = $connection->getConnection();

        $query = sprintf("SELECT designation.designation_name FROM users inner join designation on users.designation_id=designation.designation_id where user_id=%s",$this->userid);
        $designation = $conn->query($query)->fetch_object()->designation_name;

        return $designation;
    }
    
    public function getFiles(){
        $connection = new Connection();
        $conn = $connection->getConnection();

        $query = sprintf("SELECT * FROM files where user_id=%s",$this->userid);
        $fileArray = array();

        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($fileArray,array("url" => $row["url"], "namee" => $row["namee"]));
            }
        }

        return $fileArray;
    }

}

?>