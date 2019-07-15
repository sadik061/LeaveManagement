<?php include 'session.php'; ?>
<?php include 'template/header.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Pending applications

                            </h4>
                        </header>
                        <div class="panel-body minimal">

                            <div class="table-inbox-wrap ">
                                <table class="table table-inbox table-hover">
                                    <tbody>
                                    <?php include 'core/database.php';

                                    include 'core/database.php';
                                    if (isset($_GET['pageno'])) {
                                        $pageno = $_GET['pageno'];
                                    } else {
                                        $pageno = 1;
                                    }
                                    $no_of_records_per_page = 10;
                                    $offset = ($pageno - 1) * $no_of_records_per_page;
                                    $total_pages_sql = "SELECT COUNT(*) FROM application where status='pending' and admin=0 and department=1";



                                    $result = $conn->query($total_pages_sql);
                                    $total_rows = mysqli_fetch_array($result)[0];
                                    $total_pages = ceil($total_rows / $no_of_records_per_page);

                                    $sql = "SELECT * FROM application where status='pending' and admin=0 and department=1 LIMIT ".$offset.", ".$no_of_records_per_page;



                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) { ?>

                                            <tr class="unread" >

                                                <td class="view-message  dont-show" style="width: 30%"><a href="view.php?id=<?php echo $row["application_id"] ?>"> <?php echo $row["subject"] ?></a></td>
                                                <td class="view-message "><a href="view.php?id=<?php echo $row["application_id"] ?>"> <?php echo $row["message"] ?></a></td>
                                                <td class="view-message  text-right"> <?php echo $row["subday"] ?></td>
                                            </tr >
                                        <?php }} ?>

                                    </tbody >
                                </table >
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
                                <?php echo isset($_GET["message"]) ?>
                            </div >
                        </div >
                    </section >
                </div >

            </div >
        </section >
        <!-- /wrapper-->
    </section >

<?php include 'template/footer.php'; ?>