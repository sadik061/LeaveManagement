<?php

// session_start();
// require 'databaseClass.php';
require 'database.php';

class User
{
    public $userid;
    public $user_name;
    public $phone;
    public $blood;
    public $address;
    public $point;
    public $email;
    public $password;
    public $designation_id;
    public $loan;
    public $role;
    public $image;
    public $facebook;
    public $linkedin;
    public $skype;
    public $earn_leave;
    public $maternity_leave;
    public $urgent_leave;
    public $casual_leave;
    public $medical_leave;
    public $without_pay_leave;
    public $other_leave;
    public $earn_leave_year;

    public function __construct($userid)
    {
        $this->userid = $userid;

        require('database.php');

        $query = sprintf("SELECT * FROM users WHERE user_id=%s", $this->userid);
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()) {
            $this->user_name = $row['user_name'];
            $this->phone = $row['phone'];
            $this->blood = $row['blood'];
            $this->address = $row['address'];
            $this->point = $row['point'];
            $this->email = $row['email'];
            $this->password = $row['password'];
            $this->designation_id = $row['designation_id'];
            $this->loan = $row['loan_taken'];
            $this->role = $row['role'];
            $this->image = $row['image'];
            $this->facebook = $row['facebook'];
            $this->linkedin = $row['linkedin'];
            $this->skype = $row['skype'];
            $this->earn_leave = $row['earn_leave'];
            $this->maternity_leave = $row['maternity_leave'];
            $this->urgent_leave = $row['urgent_leave'];
            $this->casual_leave = $row['casual_leave'];
            $this->medical_leave = $row['medical_leave'];
            $this->without_pay_leave = $row['without_pay_leave'];
            $this->other_leave = $row['other_leave'];
            $this->earn_leave_year = $row['earn_leave_year'];
        }
    }

    public function getLeave($leaveType)
    {
        require('database.php');

        if (in_array($leaveType, ['earn_leave', 'maternity_leave', 'urgent_leave','without_pay_leave'])) {
            // this leaves are in user table
            $query = sprintf("SELECT %s as days FROM users WHERE user_id=%s", $leaveType, $this->userid);
        } else {
            // this leaves are in designation table

            // getting designationGivenOffdays - usertakenoffdays
            $query = sprintf("SELECT ((SELECT %s FROM designation WHERE designation_id=%s)-(SELECT %s FROM users WHERE user_id=%s)) as days", $leaveType, $this->designation_id, $leaveType, $this->userid);
        }


        $leave = $conn->query($query)->fetch_object()->days;


        return $leave;
    }

    public function setLeave($leaveType, $days)
    {
        require('database.php');
        
        // if (in_array($leaveType, ['earn_leave', 'casual_leave', 'medical_leave', 'other_leave'])) {
            
            //     // reducing leaves like earn_leave
            //     $query = sprintf("UPDATE users SET users.%s = users.%s-%s WHERE users.user_id = %s", $leaveType, $leaveType, $days, $this->userid);
            // } else {
                //     // increasing leaves like urgent_leave
                //     $query = sprintf("UPDATE users SET users.%s = users.%s+%s WHERE users.user_id = %s", $leaveType, $leaveType, $days, $this->userid);
                
                // }
                
        if ($leaveType == 'earn_leave'){
            $this->earn_leave -= $days;
        }
        else if ($leaveType == 'casual_leave'){
            $this->casual_leave -= $days;
        }
        else if ($leaveType == 'medical_leave'){
            $this->medical_leave -= $days;
        }
        else if ($leaveType == 'other_leave'){
            $this->other_leave -= $days;
        }
        else if ($leaveType == 'maternity_leave'){
            $this->maternity_leave += $days;
        }
        else if ($leaveType == 'urgent_leave'){
            $this->urgent_leave += $days;
        }
        else if ($leaveType == 'without_pay_leave'){
            $this->without_pay_leave += $days;
        }
                
                
        $query = sprintf("UPDATE users SET %s = %s+%s WHERE users.user_id = %s", $leaveType,$leaveType, $days, $this->userid);
        $conn->query($query);
        // return $query;
    }




    public function getDesignation()
    {
        require('database.php');

        $query = sprintf("SELECT designation.designation_name FROM users inner join designation on users.designation_id=designation.designation_id where user_id=%s", $this->userid);
        $designation = $conn->query($query)->fetch_object()->designation_name;

        return $designation;
    }

    public function getFiles()
    {
        require('database.php');

        $query = sprintf("SELECT * FROM files where user_id=%s", $this->userid);
        $fileArray = array();

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($fileArray, array("user_id" => $row["user_id"], "fileid" => $row["id"], "url" => $row["url"], "namee" => $row["namee"]));
            }
        }

        return $fileArray;
    }
}
