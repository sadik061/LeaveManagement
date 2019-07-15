<?php include 'session.php'; ?>
<?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>
                <?php include 'core/database.php';
                $sql = "SELECT * FROM users inner join designation on users.designation_id=designation.designation_id where user_id=" . $_SESSION["userid"];

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    $row = $result->fetch_assoc();
                }
                ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Welcome <?php echo $row["user_name"] ?>
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/profileupdate.php"
                                  method="post" enctype="multipart/form-data">
                                <div class="row content-panel">
                                    <div class="col-md-4 profile-text mt mb centered">
                                        <div class="right-divider hidden-sm hidden-xs">
                                            <img src="uploads/<?php echo $row["image"] ?>" width="90%">
                                        </div>
                                    </div>
                                    <div class="col-md-8 profile-text mt mb centered">


                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Name:</label>
                                            <label class="col-sm-6 col-sm-6 control-label"><?php echo $row["user_name"] ?></label>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Designation:</label>
                                            <label class="col-sm-6 col-sm-6 control-label"><?php echo $row["designation_name"] ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Company:</label>
                                            <label class="col-sm-6 col-sm-6 control-label">PROFESSIONAL ASSOCIATE
                                                LTD.</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Leave Left:</label>
                                            <label class="col-sm-6 col-sm-6 control-label"><?php
                                                $sql = "SELECT * FROM application JOIN users WHERE application.user_id=users.user_id AND users.user_id=" . $_SESSION["userid"];
                                                $result = $conn->query($sql);
                                                $leave_count = 0;
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    $this_year = date("Y");
                                                    while ($rows = $result->fetch_assoc()) {
                                                        if ($rows["status"] == "approved") {

                                                            //echo $rows['leave_Date'];
                                                            $leave_year = DateTime::createFromFormat("Y-m-d", $rows['leave_Date']);
                                                            $leave_year = $leave_year->format("Y");
                                                            // echo $rows['days'];
                                                            if ($this_year == $leave_year) {
                                                                $leave_count += $rows['days'];
                                                            }
                                                        }

                                                    }
                                                }
                                                //echo $leave_count;
                                                // die();
                                                $sql = "SELECT * FROM designation WHERE designation_id=" . $row["designation_id"];

                                                $result = $conn->query($sql);
                                                $leave_left = 0;
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowss = $result->fetch_assoc()) {
                                                        $leave_left = $rowss["available_leave"] - $leave_count;
                                                    }
                                                }

                                                echo $leave_left;

                                                $conn->close();

                                                ?>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                                            <label class="col-sm-6 col-sm-6 control-label"><?php echo $row["email"] ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Social links:</label>
                                            <label class="col-sm-6 col-sm-6 control-label">
                                                <a title="Facebook" href="<?php echo $row["facebook"] ?>"
                                                   target="_blank"><i class="fa fa-facebook-square"></i></a>
                                                <a title="linked in" href="<?php echo $row["linkedin"] ?>"
                                                   target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                                <a title="skype" href="<?php echo $row["skype"] ?>" target="_blank"><i
                                                            class="fa fa-skype"></i></a>
                                            </label>
                                        </div>

                                        <a href="updateprofile.php" style="float: left;" class="btn btn-theme">Edit
                                            profile</a>

                            </form>

                        </div>
                </div>


            </div>
        </section>
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Documents
                </h4>
            </header>
            <form class="form-horizontal style-form" action="core/addfile.php"
                  method="post" enctype="multipart/form-data">
                <div class="col-md-6 profile-text mt mb centered">
                    <div class="right-divider hidden-sm hidden-xs">
                        <input type="file" name="fileToUpload" id="fileToUpload" style="margin: 6%">
                    </div>
                </div>
                <button type="submit" style="float: left;" class="btn btn-theme">Add</button>
            </form>
            <div class="panel-body ">
                <table class="table table-striped table-advance table-hover">


                    <thead>
                    <tr>
                        <th> Name</th>
                        <th> Designation</th>
                        <th> Email</th>
                        <th> Role</th>
                        <th> Remove</th>
                        <th> Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                    <td>' . $row["user_name"] . '</td>';
                            $sql2 = "SELECT * FROM designation where designation_id=" . $row["designation_id"];
                            $result2 = $conn->query($sql2);
                            $row2 = $result2->fetch_assoc();
                            echo '<td>' . $row2["designation_name"] . '</td>
                                        <td>' . $row["email"] . '</td>
                                        <td>' . $row["role"] . '</td>
                                    <td><a href="core/removeuser.php?id=' . $row["user_id"] . '" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>
                                    <td><a href="updatecollegueprofile.php?userid=' . $row["user_id"] . '" class="btn btn-warning btn-xs"><i class="fa fa-refresh "></i></a></td>
                                </tr>';
                        }
                    }
                    $conn->close(); ?>


                    </tbody>
                </table>


            </div>
        </section>
        </div>

        </div>
    </section>
    <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>