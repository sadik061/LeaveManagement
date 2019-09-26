<?php

include 'database.php';

$userid = '11';
$number = count($_POST["name"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO jobs(job_id,user_id) VALUES('%s','%s')";
                $query = sprintf($sql,trim($_POST["name"][$i]),$userid);
                $conn->query($query);
           }  
      }  
      echo json_encode(array("Data Inserted",$userid));  
 }  
 else  
 {  
      echo "Please Enter Job ID";  
 }  
 ?> 