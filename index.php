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
                            <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

                            <link rel="stylesheet" type="text/css" href="css/notice-board.css" />

                            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
                            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                            <!------ Include the above in your HEAD tag ---------->

                            <div class="container">
                                <div class="row">
                                    <?php if ($_SESSION["role"] == "admin") { ?>
                                        <textarea id="notice" class="text" cols="86" rows ="10" name="notice" form="noticeform"></textarea>

                                        <form class="form-horizontal style-form" action="core/addNotice.php" method="post" id="noticeform">


                                            <button type="submit" class="btn btn-theme">Add Notice</button>

                                        </form>

                                    <?php }?>
                                </div>
                                <div class="row">
                                    <h2>Notice Board</h2>
                                </div>
                                <div class="qa-message-list" id="wallmessages" style="overflow: scroll; border: 1px solid #ccc;width: 80%; height: 300px;">
                                    <?php include 'core/database.php';
                                    $sql = "SELECT * FROM notice_board JOIN users where notice_board.notice_board_notice_given_user=users.user_id ORDER BY notice_board_modification_time DESC";

                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        foreach($result as $data)
                                        {
                                            echo "<div class=\"message-item\" id=\"m16\">
                                        <div class=\"message-inner\">
                                            <div class=\"message-head clearfix\">
                                                <div class=\"avatar pull-left\"><a href=\"./index.php?qa=user&qa_1=Oleg+Kolesnichenko\"><img src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\"></a></div>
                                                <div class=\"user-detail\">
                                                    <h5 class=\"handle\">".$data["user_name"]."</h5>
                                                    <div class=\"post-meta\">
                                                        <div class=\"asker-meta\">
                                                            <span class=\"qa-message-what\"></span>
                                                            <span class=\"qa-message-when\">
												<span class=\"qa-message-when-data\">".$data["notice_board_modification_time"]."</span>
											</span>
                                                            <span class=\"qa-message-who\">
												<span class=\"qa-message-who-pad\">by </span>
												<span class=\"qa-message-who-data\"><a href=\"./index.php?qa=user&qa_".$data["user_id"]."=".$data["user_name"]."\">".$data["user_name"]."</a></span>
											</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"qa-message-content\">
                                               ".$data["notice_board_details"]."
                                            </div>
                                        </div></div>";
                                        }
                                        // output data of each row
                                        //$row = $result->fetch_assoc();

                                    }
                                    ?>




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