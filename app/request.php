<?php include 'session.php'; ?>
<?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Requests

                            </h4>
                        </header>
                        <div class="panel-body minimal">

                            <div class="table-inbox-wrap ">
                                <table class="table table-inbox table-hover">
                                    <tbody>
                                    <?php include 'core/database.php';
                                    $sql2 = "SELECT * FROM users natural join designation where user_id=" . $_SESSION["userid"];
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();
                                    $sql = "SELECT * FROM ((application natural join belongs_to) inner join users on belongs_to.user_id=users.user_id) natural join designation where status='pending' and designation.designation_id=" . $row2["parent_id"];
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) { ?>
                                            <tr class="unread">
                                                <td class="view-message  dont-show" style="width: 30%"><a
                                                            href="view.php?id=<?php echo $row["application_id"] ?>">  <?php echo $row["subject"] ?></a>
                                                </td>
                                                <td class="view-message "><a
                                                            href="view.php?id=<?php echo $row["application_id"] ?>"> <?php echo $row["message"] ?></a>
                                                </td>
                                                <td class="view-message  text-right"> <?php echo $row["subday"] ?></td>
                                            </tr>
                                        <?php }
                                    } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- /wrapper-->
    </section>

<?php include 'template/footer.php'; ?>