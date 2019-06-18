<?php include 'session.php'; ?>
<?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>
                <?php include 'core/database.php';
                $sql = "SELECT * FROM ((users inner join designation on users.designation_id=designation.designation_id) inner join belongs_to on users.user_id=belongs_to.user_id) natural join application where application_id=" . $_GET["id"];
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    $row = $result->fetch_assoc();
                }
                ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">

                        <div class="panel-body ">
                            <div class="mail-header row">

                                <div class="col-md-9">
                                    <h4>
                                        <?php
                                        $Year = date('Y');
                                        $Month = (int)date('m');
                                        $mon = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                        $Day = date('d');

                                        echo $mon[$Month] . " " . $Day . ", " . $Year; ?> </h4>
                                    <h4> Authority</h4>
                                    <h4> <?php
                                        echo $row["designation_name"]; ?></h4>
                                    <h4>Prfessional Associate LTD.</h4>
                                    <h4>Adabor, Dhaka-1207</h4><br>
                                    <h4>Subject: <?php echo $row["subject"]; ?></h4>
                                    <br><h4>Dear Sir,</h4><br>
                                </div>
<?php if ($_SESSION["role"] == "admin") { ?>
                                <form class="form-horizontal style-form" action="core/Approved.php" method="get">
                                    <div class="col-md-2">
                                        <div class="compose-btn pull-right">
                                            <select class="form-control" name="status">

                                                <option value="approved">Approve</option>
                                                <option value="rejected">Reject</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="application_id"
                                                   value="<?php echo $row["application_id"] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="compose-btn pull-right">
                                            <button type="submit" class="btn btn-sm btn-theme"><i
                                                        class="fa fa-reply"></i> Apply
                                            </button>


                                        </div>
                                    </div>
                                </form>
    <?php } ?>
                            </div>

                            <div>
                                <h4>I am writing this letter to inform and to get permission for the leaves
                                    form <?php echo $row["leave_Date"]; ?> for <?php echo $row["days"]; ?>
                                    days.<?php echo $row["message"]; ?>

                                </h4><br>
                                <h4>I shall be highly obliged for your act of kindness.</h4><br>
                                <h4>Thanks in anticipation.</h4><br><br>
                                <h4>Your sincerely,</h4>
                                <h4><?php echo $row["user_name"] ?></h4>
                                <h4> <?php
                                    $sql2 = "SELECT * FROM designation where designation_id=" . $row["designation_id"];
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();
                                    echo $row2["designation_name"]; ?></h4>

                            </div>


                        </div>
                    </section>

                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>