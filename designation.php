<?php include 'session.php'; ?>
<?php if($_SESSION["role"]=="admin" || $_SESSION["role"]=="super_admin"){ ?>
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
                                Add new desingation
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/adddesignation.php" method="get">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Designation Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="designation_name" value="">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Casual Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="available_leave" value="">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Medical Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="casual_leave" value="">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Other Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="other_leave" value="">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-theme">Add</button>

                            </form>

                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                All desingations
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <table class="table table-striped table-advance table-hover">


                                <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> Designation</th>
                                    <th><i class="fa fa-bookmark"></i> Casual Leave</th>
                                    <th><i class="fa fa-bookmark"></i> Medical Leave</th>
                                    <th><i class="fa fa-bookmark"></i> Other Leave</th>
                                    <th><i class=" fa fa-edit"></i> remove</th>
                                    <th><i class=" fa fa-edit"></i> update</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM designation";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                                <td>' . $row["designation_name"] . '</td>
                                                <td>' . $row["casual_leave"] . '</td>
                                                <td>' . $row["medical_leave"] . '</td>
                                                <td>' . $row["other_leave"] . '</td>
                                                <td><a href="core/removedesignation.php?id='.$row["designation_id"].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>
                                                <td><a href="updatedesignationview.php?des_id=' . $row["designation_id"] . '" class="btn btn-warning btn-xs"><i class="fa fa-refresh "></i></a></td>
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
<?php } ?>
