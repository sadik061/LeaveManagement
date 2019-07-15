<div class="col-sm-3" style="position: fixed;">


    <section class="panel">
        <div class="panel-body">
            <a href="compose.php" class="btn btn-compose">
                <i class="fa fa-pencil"></i> New Application
            </a>
            <ul class="nav nav-pills nav-stacked mail-nav" id="nav">
                <li><a href="profile.php"> <i class="fa fa-envelope-o"></i> Profile</a></li>
                <?php if ($_SESSION["role"] == "super_admin") { ?>
                    <li><a href="a_pending.php"> <i class="fa fa-inbox"></i> pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='pending' and admin=0 and department=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        // output data of each row
                        while ($row = $result->fetch_assoc()){?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="a_approved.php"> <i class="fa fa-file-text-o"></i> Approved
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

                    <li><a href="designation.php"> <i class="fa fa-envelope-o"></i> Add designation</a></li>
                    <li><a href="user.php"> <i class="fa fa-envelope-o"></i> Add colligue</a></li>
                <?php } else { ?>
                    <li><a href="pending.php"> <i class="fa fa-inbox"></i> pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application where status='pending' and user_id=" . $_SESSION["userid"];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="approved.php"> <i class="fa fa-file-text-o"></i> Approved
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application natural join users where status='approved' and user_id=" . $_SESSION["userid"];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM application  natural join users where status='rejected' and user_id=" . $_SESSION["userid"];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    }?>
                <?php if ($_SESSION["role"] == "department_head") { ?>
                        <li style="    padding-left: 16px;background-color: bisque;">Emails from your departments</li>
                        <li><a href="d_pending.php"> <i class="fa fa-inbox"></i> pending
                        application <?php include 'core/database.php';
                        $sql = "SELECT count(seen) as sum FROM application  users where status='pending' and department=0";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                            <?php }
                        } ?>
                        <li><a href="d_approved.php"> <i class="fa fa-file-text-o"></i> Approved
                        application <?php include 'core/database.php';
                        $sql = "SELECT count(seen) as sum FROM application where status='pending' and department=1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                            <?php }
                        } ?>
                        <li><a href="d_rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                        $sql = "SELECT count(seen) as sum FROM application where status='rejected' and department=1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                            <?php }
                        }?>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </section>


</div>