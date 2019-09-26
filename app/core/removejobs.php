<?php

include 'database.php';

$jobid = $_GET['job_id'];
$empid= $_GET['emp_id'];
 
$sql = "DELETE FROM jobs WHERE jobs.job_id = '$jobid'";
$conn->query($sql);

header("Location: ../joblist.php?emp_id=".$empid);

          
?> 