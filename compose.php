<?php include 'session.php'; 
include 'core/userProfile.php';
?>
<?php include 'template/header.php'; ?>
<?php
$error = $_GET['error'];
if($error=='remainingError'){ ?>
    <script>
        alert('Please check your profile to see the remaining leave.');
    </script>
<?php }
else if($error=='daysError'){ ?>
    <script>
        alert('Days can not be less than 1');
    </script>
<?php } ?>
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
                        <div class="panel-body ">
                            <div class="mail-header row">
                                <form action="core/compose.php" method="POST">
                                <div class="col-md-8">
                                    <h4>
                                        <?php
                                        // todays's date
                                        echo sprintf("%s %u, %u",DateTime::createFromFormat('!m', date("m"))->format('F'), date("d"),date("Y"));                                        
                                        ?> 
                                    </h4>
                                    <h4> Authority</h4>
                                    <h4> <?php
                                        //echo $row["designation_name"]; ?></h4>
                                    <h4>Prfessional Associate LTD.</h4>
                                    <h4>Adabor, Dhaka-1207</h4><br>
                                    <h4>Subject: 

                                    <select id="leave_type" name="leave_type">
                                        <option value="earn_leave">Earn Leave</option>
                                        <option value="maternity_leave">Maternity Leave</option>
                                        <option value="urgent_leave">Urgent Leave</option>
                                        <option value="medical_leave">Medical Leave</option>
                                        <option value="casual_leave">Casual Leave</option>
                                        <option value="other_leave">Other Leave</option>
                                    </select>
                                    </h4>

                                    <br><h4>Dear Sir,</h4><br>
                                </div>
                                <div class="col-md-4">
                                    <div class="compose-btn pull-right">
                                        <button type="submit" class="btn btn-sm btn-theme"><i
                                                    class="fa fa-reply"></i> Apply</button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4>I am writing this letter to inform and to get permission for the leaves from <input
                                            type="date" class="form-control"
                                            style="display: initial;width:15%;" name="date"
                                            placeholder="date"> for <input type="text" class="form-control"
                                                                           style="display: initial;width:15%;"
                                                                           placeholder="3" name="days"> days.<input type="text" class="form-control"
                                                                              style="display: initial;width: 90%;    margin-top: 7px;"
                                                                              placeholder="My younger brother is going to be married on the " name="message">

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
                        </form>

                        </div>

                    </section>

                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>