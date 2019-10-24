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
                                Update your profile
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/profileupdate.php"
                                  method="post" enctype="multipart/form-data">
                                <div class="row content-panel">
                                    <div class="col-md-4 profile-text mt mb centered">
                                        <div class="right-divider hidden-sm hidden-xs">
                                            <img src="uploads/<?php echo $row["image"] ?>" width="90%">
                                            <input type="file" name="fileToUpload" id="fileToUpload" style="margin: 6%">
                                        </div>
                                    </div>
                                    <div class="col-md-8 profile-text mt mb centered">


                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="user_name"
                                                       value="<?php echo $row["user_name"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                       value="<?php echo $row["designation_name"] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none">
                                            <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="designation_id"
                                                       value="<?php echo $row["designation_id"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email"
                                                       value="<?php echo $row["email"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="password"
                                                       value="<?php echo $row["password"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Facebook</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="facebook"
                                                       value="<?php echo $row["facebook"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Linked In</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="linkedin"
                                                       value="<?php echo $row["linkedin"] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Skype</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="skype"
                                                       value="<?php echo $row["skype"] ?>">
                                            </div>
                                        </div>

                                        <button type="submit" style="float: left;" class="btn btn-theme">Update</button>

                            </form>
                        </div>
                </div>

            </div>
        </section>
        </div>

        </div>
    </section>
    <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>