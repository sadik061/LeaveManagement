<?php include 'session.php'; 
include 'core/notice.php';


?>
<?php include 'template/header.php'; ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
            <?php include 'template/sidebar.php';
                $user = new User($_SESSION["userid"]);
                include 'core/database.php';
                // $sql = "SELECT * FROM users inner join designation on users.designation_id=designation.designation_id where user_id=" . $_SESSION["userid"];

                // $result = $conn->query($sql);
                // if ($result->num_rows > 0) {
                //     // output data of each row
                //     $row = $result->fetch_assoc();
                // }
                ?>
                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Notice Board
                            </h4>
                        </header>
                        <div class="panel-body ">


                            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
                            <script src="//code.jquery.com/jquery'-1.11.1.min.js"></script>
                            <!------ Include the above in your HEAD tag ---------->
                            <div class="row content-panel" style="padding: 15px 15px;"> 

                                    <?php if ($_SESSION["role"] == "super_admin") { ?>
                                        
                                        <form class="form-horizontal style-form" action="core/addNotice.php" method="post" id="noticeform">
                                        
                                            <input style="width:100%" type="text" name="notice_subject" id="notice_subject" placeholder="Enter Subject" required>
                                            <br><br>
                                            <textarea id="notice" class="text" cols="96" rows ="10" style="width:100%;" name="notice" form="noticeform" placeholder="Enter notice" required></textarea>

                                            <button type="submit" class="btn btn-theme">Add Notice</button>

                                        </form>

                                    <?php }?>
                            </div>
                                
                            <?php 
                            if (isset($_GET['pageno'])) {
                                $pageno = $_GET['pageno'];
                            } else {
                                $pageno = 1;
                            }
                            // $no_of_records_per_page = 10;
                            // $offset = ($pageno-1) * $no_of_records_per_page;
                            $access_msg = ($pageno-1)*10;

                            $notices = getNotice(); 
                            $total_pages = ceil(sizeof($notices) /10);

                            $notices = array_slice($notices, $access_msg, $access_msg+10);
                            
                            ?>
                            <div class="accordion" id="accordionExample">
                                
                                <?php foreach($notices as $notice){ ?>
                                <div>
                                    <div class="card-header" id="heading-msg-<?php echo $notice["id"] ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-msg<?php echo $notice["id"] ?>" aria-expanded="true" aria-controls="collapse-msg<?php echo $notice["id"] ?>">
                                        <?php echo $notice["subject"] ?>
                                        </button>
                                        <p style="float: right;font-size: small;margin-top: 1%;"><?php echo $notice["time"] ?></p>
                                    </h2>
                                    
                                    </div>

                                    <div id="collapse-msg<?php echo $notice["id"] ?>" class="collapse" aria-labelledby="heading-msg<?php echo $notice["id"] ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $notice["notice"] ?></p>
                                        <p>Posted by <?php echo $notice["user_name"] ?></p>
                                    </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <ul class="pagination">
                                <li><a href="?pageno=1">First</a></li>
                                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                </li>
                                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                </li>
                                <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                            </ul>

                        </div>

                    </section>
                </div>

            </div>

        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>