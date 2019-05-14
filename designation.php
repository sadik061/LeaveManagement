<?php include 'session.php'; ?>
<?php if($_SESSION["role"]=="admin"){ ?>
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
                                <!--<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Parent</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="parent_id">
                                            <option value="0">None</option>
                                            <?php include 'core/database.php';
                                            $sql = "SELECT * FROM designation";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {

                                                    echo '<option value="' . $row["designation_id"] . '">' . $row["designation_name"] . '</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>--!>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Total Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="available_leave" value="">
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
                                    <th><i class="fa fa-bookmark"></i> Total Leave</th>
                                    <th><i class=" fa fa-edit"></i> remove</th>
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
                                        echo '<tr><td>' . $row["designation_name"] . '</td>
                                        <td>' . $row["available_leave"] . '</td>';
                                    echo '<td><a href="core/removedesignation.php?id='.$row["designation_id"].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>
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
