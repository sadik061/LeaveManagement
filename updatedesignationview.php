<?php include 'session.php'; ?>
<?php if($_SESSION["role"]=="admin"){ ?>
    <?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>
                <?php include 'core/database.php';
                $sql = "SELECT * FROM designation where designation_id=" . $_GET["des_id"];

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
                               Update desingation
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/updatedesignation.php" method="get">
                                <input type="hidden" id="des_id" name="des_id" value="<?php echo $_GET["des_id"] ?>">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Designation Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="designation_name" value="<?php echo $row["designation_name"] ?>">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Total Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="available_leave" value="<?php echo $row["available_leave"] ?>">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-theme">Update</button>

                            </form>

                        </div>
                    </section>

                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

    <?php include 'template/footer.php'; ?>
<?php } ?>
