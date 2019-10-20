<?php 
    include 'core/userProfile.php';
    $user = new User($_SESSION["userid"]);
?>
<div class="col-sm-3" style="position: fixed;">


    <section class="panel">
        <div class="panel-body">
            <?php //if($user->role != "super_admin"){ ?>
            <a href="compose.php" class="btn btn-compose">
                <i class="fa fa-pencil"></i> New Application
            </a>
            <?php //} ?>
            <ul class="nav nav-pills nav-stacked mail-nav" id="nav">
                <li><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>


                <!-- Super admin -->
                <?php if ($user->role == "super_admin") 
                { ?>
                    <li><a href="a_pending.php"> <i class="fa fa-inbox"></i>Employee pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='pending' and admin=0 and department=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        // output data of each row
                        while ($row = $result->fetch_assoc()){?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span>
                        <?php }
                    } ?>
                    </a></li>
                    
                    
                    <li><a href="sadmin_pending.php"> <i class="fa fa-inbox"></i>My pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='pending' and admin=0 and department=1 and user_id=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        // output data of each row
                        while ($row = $result->fetch_assoc()){?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span>
                        <?php }
                    } ?>
                    </a></li>
                    
                    


                    <li><a href="a_approved.php"> <i class="fa fa-check"></i> Approved
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='approved' and admin=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="a_rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='rejected' and admin=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>

                    <li><a href="department.php"> <i class="fa fa-envelope-o"></i> Add department</a></li>
                    <li><a href="designation.php"> <i class="fa fa-envelope-o"></i> Add designation</a></li>
                    <li><a href="user.php"> <i class="fa fa-envelope-o"></i> Add colleague</a></li>
                <?php } 
                
                
                
                // Normal User
                else { ?>
                    <li><a href="pending.php"> <i class="fa fa-inbox"></i> pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='pending' and user_id='$user->userid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="approved.php"> <i class="fa fa-check"></i> Approved
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application natural join users where status='approved' and user_id='$user->userid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application  natural join users where status='rejected' and user_id='$user->userid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    }?>



                <!-- department head -->
                <?php if ($user->role == "department_head") { ?>
                        <li style="    padding-left: 16px;background-color: bisque;">Emails from your departments</li>
                        <li><a href="d_pending.php"> <i class="fa fa-inbox"></i> pending application 
                        <?php include 'core/database.php';
                        $sql = "SELECT count(seen) as sum FROM application NATURAL JOIN users where status='pending' and department=0 and users.department_id='%s'";
                        $sql = sprintf($sql,$user->department_id);
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                            <?php }
                        } ?>
                        <li><a href="d_approved.php"> <i class="fa fa-check"></i> Approved
                        application <?php include 'core/database.php';
                        $sql = "SELECT count(seen) as sum FROM application NATURAL JOIN users where status='pending' and department=1 and users.department_id='%s'";
                        $sql = sprintf($sql,$user->department_id);

                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                            <?php }
                        } ?>
                        <li><a href="d_rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                        $sql = "SELECT count(seen) as sum FROM application NATURAL JOIN users where status='rejected' and department=1 and users.department_id='%s'";
                        $sql = sprintf($sql,$user->department_id);

                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                            <?php }
                        }?>
                    <?php } ?>
                <?php } ?>




                <li><a href="msg.php"> <i class="fa fa-envelope-o"></i>Messages
                <?php include 'core/database.php';
                $sql = "SELECT COUNT(*) as sum FROM messages GROUP BY to_user_id HAVING to_user_id='$user->userid'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) { ?>
                        <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];}}}
                ?></span></a></li>
                <li><a href="contacts.php"> <i class="fa fa-address-book"></i>Contacts
                </a></li>
            </ul>
        </div>
    </section>


</div>