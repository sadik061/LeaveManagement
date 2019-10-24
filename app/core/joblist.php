<?php

class Jobs{
    public static function jobList($user_id){
        require 'database.php';

        $sql = "SELECT * FROM jobs WHERE user_id='%s' ORDER BY creation_date desc";
        $query = sprintf($sql,$user_id);

        $jobList = array();

        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($jobList,$row["job_id"]);
            }
        }

        return $jobList;

    }



    
}