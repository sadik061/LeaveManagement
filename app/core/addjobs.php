<?php

include 'database.php';

$userid = $_POST["name"][1];

$values = array();

// $('#add_name').serialize() ===>>> $values
parse_str($_POST['name'][0], $values);
$number = count($values['name']);  


 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($values['name'][$i] != ''))  
           {  
                $sql = "INSERT INTO jobs(job_id,user_id) VALUES('%s','%s')";
                $query = sprintf($sql,trim($values['name'][$i]),$userid);
                $conn->query($query);
           }  
      }  
      echo json_encode(array("Data Inserted",$userid));  
 }  
 else  
 {  
      echo "Please Enter Job ID";  
 }  


// echo json_encode(array($values['name'][1],$userid));
 ?> 